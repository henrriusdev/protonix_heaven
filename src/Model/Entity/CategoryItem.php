<?php

namespace ProtonixHeaven\Model\Entity;
use DateTimeImmutable;

class CategoryItem extends Base
{
  protected string $categoryId;
  protected string $itemId;

  public function getCategoryId(): string
  {
    return $this->categoryId;
  }
  public function getItemId(): string
  {
    return $this->itemId;
  }
  public function setCategoryId(string $categoryId): void
  {
    $this->categoryId = $categoryId;
  }
  public function setItemId(string $itemId): void
  {
    $this->itemId = $itemId;
  }
}