<?php

namespace ProtonixHeaven\Repository\Filters;

use Doctrine\DBAL\Query\Expression\CompositeExpression;

class FilterResult
{
    public function __construct(
        public string|CompositeExpression|null $expr = null,
        public array $params = [],
        public array $types = [],
    ) {}

    public function isEmpty(): bool
    {
        return $this->expr === null || $this->expr === '';
    }
}
