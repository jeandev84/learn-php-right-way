<?php

namespace Framework\Database\Connection;

use PDO;
use PDOException;


class PdoConnection
{

     protected $pdo;


     private array $options = [
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
         PDO::ATTR_EMULATE_PREPARES => false
     ];


     public function __construct(
         string $dsn,
         string $username = null,
         string $password = null,
         array $options = []
     )
     {
         try {
             $this->pdo = new PDO($dsn, $username, $password, $this->options($options));
         } catch (PDOException $e) {
             throw new PDOException($e->getMessage(), (int)$e->getCode());
         }
     }


     public function isConnected(): bool
     {
         return $this->pdo instanceof PDO;
     }




     /**
      * @return PDO
     */
     public function getPdo(): PDO
     {
        return $this->pdo;
     }


     public function createQuery(): Query
     {
         return new Query($this->getPdo());
     }

     public function statement(string $sql): Query
     {
         return $this->createQuery()->prepare($sql);
     }


     public function transaction(\Closure $func) {

          $this->pdo->beginTransaction();

          try {
             $func($this);
             $this->pdo->commit();
          } catch (PDOException $e) {
              if ($this->pdo->inTransaction()) {
                  $this->pdo->rollBack();
              }
              throw $e;
          }
     }


    private function options(array $options)
    {
        return array_merge($this->options, $options);
    }
}