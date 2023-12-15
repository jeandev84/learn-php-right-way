<?php

namespace App;

use PDO;
use PDOException;

class Connection
{
      public static function make(array $config): PDO
      {
          try {
              $options = [
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                  PDO::ATTR_EMULATE_PREPARES => false
              ];

              return new PDO(
            $config['driver'] . ':host='. $config['host'] .';dbname='. $config['database'],
                 $config['user'],
                 $config['pass'],
                 $options
              );
          } catch (PDOException $e) {
              throw new PDOException($e->getMessage(), (int)$e->getCode());
          }
      }


      public function makePdo()
      {
          return new PDO(
              'mysql:host='. $_ENV['DB_HOST'] .';dbname='. $_ENV['DB_DATABASE'],
              $_ENV['DB_USER'],
              $_ENV['DB_PASS'],
              []
          );
      }


      public static function transaction(\Closure $func): void
      {
          $pdo = static::make();

          try {
              $pdo->beginTransaction();
              $func($pdo);
              $pdo->commit();
          } catch (PDOException $e) {
              if ($pdo->inTransaction()) {
                  $pdo->rollBack();
              }
              throw $e;
          }
      }
}
