<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Model\Entity\CategoryItem;
use ProtonixHeaven\Repository\Filters\QueryFilters;

/**
 * CategoryItem Repository
 * @template T CategoryItem
 */
class CategoryItemRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'categories_items';
  }

  protected function getEntityClass(): string
  {
    return CategoryItem::class;
  }
}