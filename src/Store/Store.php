<?php

namespace ProtonixHeaven\Store;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Dotenv\Dotenv;

final class Store
{
  private static ?Connection $conn = null;

  private function __construct() {}

  /**
   * Previene la clonación del singleton.
   */
  private function __clone() {}

  /**
   * @return Connection
   * @throws \Doctrine\DBAL\Exception
   */
  public static function getConnection(): Connection
  {
    if (self::$conn === null) {

      if (class_exists(Dotenv::class) && file_exists(__DIR__ . '/../../.env')) {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();
      }

      if (!isset($_ENV['DB_DATABASE'])) {
        throw new \Exception("Environment variable DB_DATABASE is not set.");
      }

      $connectionParams = [
        'dbname'   => $_ENV['DB_DATABASE'],
        'user'     => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'host'     => $_ENV['DB_HOST'],
        'driver'   => 'pdo_pgsql', 
      ];

      self::$conn = DriverManager::getConnection($connectionParams);

      self::$conn->fetchOne("SELECT 1");
    }

    return self::$conn;
  }
}
