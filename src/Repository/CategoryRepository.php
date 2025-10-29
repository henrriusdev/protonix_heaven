<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Model\Entity\Category;

/**
 * Category Repository
 * @template T Category
 */
class CategoryRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'categories';
  }

  protected function getEntityClass(): string
  {
    return Category::class;
  }
}