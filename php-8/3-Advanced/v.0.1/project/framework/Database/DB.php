<?php

namespace Framework\Database;

use PDO;
use PDOException;


/**
 * @mixin PDO
*/
class DB
{

      protected PDO $pdo;


      public function __construct(array $config)
      {
          $defaultOptions = [
              PDO::ATTR_EMULATE_PREPARES => false,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          ];

          try {
              $this->pdo = new PDO(
             $config['driver'] . ':host='. $config['host'] .';dbname='. $config['database'],
                  $config['user'],
                  $config['pass'],
           $config['options'] ?? $defaultOptions
              );
          } catch (PDOException $e) {
              throw new PDOException($e->getMessage(), (int)$e->getCode());
          }
      }


      /**
       * @return PDO
      */
      public function getPdo(): PDO
      {
          return $this->pdo;
      }



      public function __call(string $name, array $arguments)
      {
          return call_user_func_array([$this->pdo, $name], $arguments);
      }
}