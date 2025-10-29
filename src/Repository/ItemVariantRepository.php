<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Repository\Filters\QueryFilters;
use ProtonixHeaven\Repository\BaseRepository;
use ProtonixHeaven\Model\Entity\ItemVariant;

/**
 * Item Variant Repository
 * @template T ItemVariant
 */
class ItemVariantRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'item_variants';
  }

  protected function getEntityClass(): string
  {
    return ItemVariant::class;
  }
  
  /**
   * Find an item variant by its ID.
   * @param string $id
   * @return array<ItemVariant>|null
   */
  public function findItemVariantById(string $id): ?array
  {
    $filters = [
      QueryFilters::is('id', $id),
    ];

    $result = $this->getOne($filters);
    return $result ?: null;
  }
}
