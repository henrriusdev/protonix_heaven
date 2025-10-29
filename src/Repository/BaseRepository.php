<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Store\Store;
use ProtonixHeaven\Repository\Filters\QueryFilters; // <-- Importa
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;

/**
 * Base abstract repository class.
 * @template T Tipo de entidad manejada por el repositorio.
 */
abstract class BaseRepository
{
  /**
   * @var string El nombre de la tabla que maneja este repositorio.
   * Debe ser definido por la clase hija.
   */
  abstract protected function getTable(): string;
  abstract protected function getEntityClass(): string;


  protected readonly Connection $db;

  public function __construct()
  {
    $this->db = Store::getConnection();
  }

  /**
   * Start a new QueryBuilder selecting all (*) from the repository table
   * and applying the soft-delete filter.
   */
  protected function baseQuery(): QueryBuilder
  {
    return $this->qb()
      ->select('*')
      ->from($this->getTable())
      ->where('deleted_at IS NULL');
  }

  /**
   * Gets all records matching the filters.
   *
   * @param array<callable(QueryBuilder): QueryBuilder> $filters Array of QueryFilters Closures
   * @return array
   */
  public function getAll(array $filters = []): array
  {
    $qb = $this->baseQuery();
    $qb = $this->applyFilters($qb, $filters);
    $results = $qb->executeQuery()->fetchAllAssociative();

    $entityClass = $this->getEntityClass();
    return array_map(fn($data) => $entityClass::fromArray($data), $results);
  }

  /**
   * Gets a single record matching the filters, hydrated as an entity object.
   *
   * @param array<callable(QueryBuilder): QueryBuilder> $filters Array of QueryFilters Closures
   * @return T|null Null if not found
   */
  public function getOne(array $filters = []): ?object
  {
    $qb = $this->baseQuery();
    $qb = $this->applyFilters($qb, $filters);
    $qb->setMaxResults(1);

    $result = $qb->executeQuery()->fetchAssociative();
    if ($result === false) {
      return null;
    }

    $entityClass = $this->getEntityClass();
    return $entityClass::fromArray($result);
  }

  /**
   * Gets a single record matching the ID, hydrated as an entity object.
   *
   * @param string $id
   * @return T|null Null if not found
   */
  public function getOneById(string $id): ?object
  {
    return $this->getOne([
      QueryFilters::is('id', $id)
    ]);
  }

  /**
   * Helper method to get a new (empty) QueryBuilder.
   */
  protected function qb(): QueryBuilder
  {
    return $this->db->createQueryBuilder();
  }

  /**
   * Helper method to apply dynamic filters.
   */
  protected function applyFilters(QueryBuilder $qb, array $filters): QueryBuilder
  {
    return QueryFilters::apply($qb, $filters);
  }

  /**
   * Helper method for transactions.
   */
  public function transaction(\Closure $callback): mixed
  {
    return $this->db->transactional($callback);
  }

  /**
   * @param T $data
   * @return integer
   */
  public function insertOne($data): int
  {
    return $this->db->insert($this->getTable(), $data);
  }

  /**
   * @param array<T> $data
   * @return integer NNumber of rows inserted
   */
  public function insertMany(array $data): int
  {
    $count = 0;
    foreach ($data as $row) {
      $count += $this->db->insert($this->getTable(), $row);
    }
    return $count;
  }

  /**
   * @param string $id
   * @param array<T> $data
   * @return integer NNumber of rows updated
   */
  public function updateOne(string $id, array $data): int
  {
    return $this->db->update($this->getTable(), $data, ['id' => $id]);
  }

  /**
   * @param string $id
   * @param mixed $data
   * @return integer NNumber of rows updated
   */
  public function updateOneById(string $id, $data): int
  {
    return $this->db->update($this->getTable(), $data, ['id' => $id]);
  }

  /**
   * @param array<T> $data
   * @param array<string, mixed> $criteria
   * @return integer NNumber of rows updated
   */
  public function update(array $data, array $criteria): int
  {
    return $this->db->update($this->getTable(), $data, $criteria);
  }

  /**
   * @param string $id
   * @return integer NNumber of rows affected
   */
  public function deleteOne(string $id): int
  {
    return $this->db->update(
      $this->getTable(),
      ['deleted_at' => (new \DateTime())->format('Y-m-d H:i:s')],
      ['id' => $id]
    );
  }
}
