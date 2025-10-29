<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Model\Entity\Order;

class OrderRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'orders';
  }

  protected function getEntityClass(): string
  {
    return Order::class;
  }
}