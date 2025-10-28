<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Repository\Filters\QueryFilters;

class UserRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'users';
  }

  public function findUserByEmail(string $email): ?array
  {
    $filters = [
      QueryFilters::is('email', $email),
    ];

    $result = $this->getOne($filters);
    return $result ?: null;
  }
}
