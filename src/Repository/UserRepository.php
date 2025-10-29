<?php

namespace ProtonixHeaven\Repository;

use ProtonixHeaven\Repository\Filters\QueryFilters;
use ProtonixHeaven\Model\Entity\User;

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

  protected function getEntityClass(): string
  {
    return User::class;
  }

  /**
   * Find a user by email.
   * @param string $email
   * @return User|null
   */
  public function findUserByEmail(string $email): ?User
  {
    $filters = [
      QueryFilters::is('email', $email),
    ];

    $result = $this->getOne($filters);
    return $result ?: null;
  }
}
