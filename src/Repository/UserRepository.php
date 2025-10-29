<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Repository\Filters\QueryFilters;

/**
 * User Repository
 * @template T User
 */
class UserRepository extends BaseRepository
{
  protected function getTable(): string
  {
    return 'users';
  }

  /**
   * Find a user by email.
   * @param string $email
   * @return array<User>|null
   */
  public function findUserByEmail(string $email): ?array
  {
    $filters = [
      QueryFilters::is('email', $email),
    ];

    $result = $this->getOne($filters);
    return $result ?: null;
  }
}
