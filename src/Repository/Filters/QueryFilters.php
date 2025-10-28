<?php
namespace ProtonixHeaven\Repository\Filters;

use Doctrine\DBAL\ArrayParameterType;
use Doctrine\DBAL\Query\QueryBuilder;
use Closure;

/**
 * QueryFilters
 *
 * Small, documented collection of filter factories for building query expressions
 * and applying them to a Doctrine DBAL QueryBuilder. Each factory returns a
 * callable that accepts either a QueryBuilder (legacy mutating mode) or an
 * ExpressionBuilder (pure mode) and produces a FilterResult in pure mode.
 */
class QueryFilters
{
  /**
   * Apply an array of filters to a QueryBuilder.
   * @param QueryBuilder $qb
   * @param array<callable> $filters
   * @return QueryBuilder
   */
  public static function apply(QueryBuilder $qb, array $filters): QueryBuilder
  {
    foreach ($filters as $filter) {
      $res = $filter($qb);

      if ($res instanceof FilterResult) {
        if ($res->isEmpty()) continue;
        $qb->andWhere($res->expr);
        foreach ($res->params as $k => $v) {
          $t = $res->types[$k] ?? null;
          if ($t !== null) $qb->setParameter($k, $v, $t);
          else $qb->setParameter($k, $v);
        }
        continue;
      }

      if ($res instanceof QueryBuilder) {
        $qb = $res;
        continue;
      }

      try {
        $res2 = $filter($qb->expr());
        if ($res2 instanceof FilterResult && !$res2->isEmpty()) {
          $qb->andWhere($res2->expr);
          foreach ($res2->params as $k => $v) {
            $t = $res2->types[$k] ?? null;
            if ($t !== null) $qb->setParameter($k, $v, $t);
            else $qb->setParameter($k, $v);
          }
        }
      } catch (\TypeError $e) {
        // ignore
      }
    }

    return $qb;
  }

  /**
   * generic equality filter
   * @param string $column
   * @param mixed $value
   * @param mixed $zeroValue
   * @return Closure
   */
  public static function genericEq(string $column, mixed $value, mixed $zeroValue): Closure
  {
    return function ($ctx) use ($column, $value, $zeroValue) {
      if ($ctx instanceof QueryBuilder) {
        if ($value === $zeroValue) return $ctx;
        $param = self::paramName($column);
        return $ctx->andWhere($ctx->expr()->eq($column, ':' . $param))
          ->setParameter($param, $value);
      }

      if ($value === $zeroValue) return new FilterResult(null, [], []);
      $param = self::paramName($column);
      $expr = $ctx->eq($column, ':' . $param);
      return new FilterResult($expr, [$param => $value], []);
    };
  }

  /**
   * smart 'is' filter
   */
  public static function is(string $column, mixed $value): Closure
  {
    return function ($ctx) use ($column, $value) {
      if ($ctx instanceof QueryBuilder) {
        $param = self::paramName($column);
        switch (gettype($value)) {
          case 'boolean':
            return self::genericEq($column, $value, false)($ctx);
          case 'NULL':
            return $ctx->andWhere($ctx->expr()->isNull($column));
          case 'string':
            if (strtoupper($value) === 'NOT NULL') return $ctx->andWhere($ctx->expr()->isNotNull($column));
            return self::genericEq($column, $value, "")($ctx);
          default:
            return $ctx->andWhere($ctx->expr()->eq($column, ':' . $param))->setParameter($param, $value);
        }
      }

      switch (gettype($value)) {
        case 'boolean':
          return self::genericEq($column, $value, false)($ctx);
        case 'NULL':
          return new FilterResult($ctx->isNull($column), [], []);
        case 'string':
          if (strtoupper($value) === 'NOT NULL') return new FilterResult($ctx->isNotNull($column), [], []);
          return self::genericEq($column, $value, "")($ctx);
        default:
          $param = self::paramName($column);
          return new FilterResult($ctx->eq($column, ':' . $param), [$param => $value], []);
      }
    };
  }

  public static function paginate(?int $limit, ?int $offset): Closure
  {
    return function ($ctx) use ($limit, $offset) {
      if ($ctx instanceof QueryBuilder) {
        if ($limit !== null && $limit > 0) $ctx->setMaxResults($limit);
        if ($offset !== null && $offset >= 0) $ctx->setFirstResult($offset);
        return $ctx;
      }
      return new FilterResult(null, [], []);
    };
  }

  public static function in(string $column, array $values): Closure
  {
    return function ($ctx) use ($column, $values) {
      if (empty($values)) {
        if ($ctx instanceof QueryBuilder) return $ctx;
        return new FilterResult(null, [], []);
      }

      $param = self::paramName($column);
      $type = (isset($values[0]) && is_int($values[0])) ? ArrayParameterType::INTEGER : ArrayParameterType::STRING;
      if ($ctx instanceof QueryBuilder) {
        return $ctx->andWhere($ctx->expr()->in($column, ':' . $param))->setParameter($param, $values, $type);
      }
      return new FilterResult($ctx->in($column, ':' . $param), [$param => $values], [$param => $type]);
    };
  }

  public static function range(string $column, mixed $from, mixed $to): Closure
  {
    return function ($ctx) use ($column, $from, $to) {
      if ($ctx instanceof QueryBuilder) {
        if ($from) $ctx->andWhere($ctx->expr()->gte($column, ':' . self::paramName($column . '_from')))->setParameter(self::paramName($column . '_from'), $from);
        if ($to) $ctx->andWhere($ctx->expr()->lte($column, ':' . self::paramName($column . '_to')))->setParameter(self::paramName($column . '_to'), $to);
        return $ctx;
      }

      $parts = [];
      $params = [];
      if ($from) { $p = self::paramName($column . '_from'); $parts[] = $ctx->gte($column, ':' . $p); $params[$p] = $from; }
      if ($to)   { $p = self::paramName($column . '_to');   $parts[] = $ctx->lte($column, ':' . $p); $params[$p] = $to; }
      if (empty($parts)) return new FilterResult(null, [], []);
      $expr = array_shift($parts);
      if (!empty($parts)) $expr = $ctx->and($expr, ...$parts);
      return new FilterResult($expr, $params, []);
    };
  }

  public static function or(array $filters): Closure
  {
    return function ($ctx) use ($filters) {
      if (empty($filters)) { if ($ctx instanceof QueryBuilder) return $ctx; return new FilterResult(null, [], []); }
      if ($ctx instanceof QueryBuilder) {
        $exprBuilder = $ctx->expr(); $parts = []; $params = []; $types = [];
        foreach ($filters as $filter) {
          $res = $filter($exprBuilder);
          if ($res instanceof FilterResult && !$res->isEmpty()) {
            $parts[] = $res->expr;
            foreach ($res->params as $k => $v) { $params[$k] = $v; if (isset($res->types[$k])) $types[$k] = $res->types[$k]; }
          }
        }
        if (empty($parts)) return $ctx;
        $expr = array_shift($parts); if (!empty($parts)) $expr = $exprBuilder->or($expr, ...$parts);
        $ctx->andWhere($expr);
        foreach ($params as $k => $v) { $t = $types[$k] ?? null; if ($t !== null) $ctx->setParameter($k, $v, $t); else $ctx->setParameter($k, $v); }
        return $ctx;
      }

      $parts = []; $params = []; $types = [];
      foreach ($filters as $filter) {
        $res = $filter($ctx);
        if ($res instanceof FilterResult && !$res->isEmpty()) { $parts[] = $res->expr; foreach ($res->params as $k => $v) { $params[$k] = $v; if (isset($res->types[$k])) $types[$k] = $res->types[$k]; } }
      }
      if (empty($parts)) return new FilterResult(null, [], []);
      $expr = array_shift($parts); if (!empty($parts)) $expr = $ctx->or($expr, ...$parts);
      return new FilterResult($expr, $params, $types);
    };
  }

  private static function paramName(string $prefix): string
  {
    static $count = 0; $prefix = preg_replace('/[^a-zA-Z0-9_]/', '_', $prefix); return $prefix . '_' . ($count++);
  }
}

