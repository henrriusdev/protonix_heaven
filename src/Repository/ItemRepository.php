<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Repository\Filters\QueryFilters;
use ProtonixHeaven\Repository\BaseRepository;
use ProtonixHeaven\Model\Entity\Item;

/**
 * Item Repository
 * @template T Item
 */
class ItemRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'items';
  }

  protected function getEntityClass(): string
  {
    return Item::class;
  }

  /**
   * Find an item by its ID.
   * @param string $id
   * @return array<Item>|null
   */
  public function findItemById(string $id): ?array
  {
    $filters = [
      QueryFilters::is('id', $id),
    ];

    $result = $this->getOne($filters);
    return $result ?: null;
  }
}
