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
             throw new PDOException($e->getMessage(), $e->getCode());
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



     public function statement(string $sql): Query
     {
         return (new Query($this->getPdo()))->prepare($sql);
     }



    private function options(array $options)
    {
        return array_merge($this->options, $options);
    }
}