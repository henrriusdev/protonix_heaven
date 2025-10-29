<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Repository\Filters\QueryFilters;
use ProtonixHeaven\Model\Entity\Invoice;

/**
 * Invoice Repository
 * @template T Invoice
 */
class InvoiceRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'invoices';
  }

  protected function getEntityClass(): string
  {
    $myclass = Invoice::class;
    return Invoice::class;
  }

  /**
   * Find invoice by id
   * @param string $id
   * @return ?array<Invoice>
   */
  public function findById(string $id): ?array
  {
    $filters = [
      QueryFilters::is('id', $id),
    ];

    $result = $this->getOne($filters);
    return $result ?: null;
  }
}
