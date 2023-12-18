<?php
namespace Framework\Database\Connection;

use PDO;
use PDOStatement;


class Query
{

     protected PDO $pdo;
     protected PDOStatement $statement;
     protected array $parameters = [];

     public function __construct(PDO $pdo)
     {
         $this->pdo = $pdo;
         $this->statement = new PDOStatement();
     }


     public function prepare(string $sql): self
     {
         $this->statement = $this->pdo->prepare($sql);

         return $this;
     }


     public function query(string $sql): self
     {
         $this->statement = $this->pdo->query($sql);

         return $this;
     }


     public function setParameters(array $parameters): self
     {
         $this->parameters = $parameters;

         return $this;
     }


     public function execute(): bool
     {
         try {
            return $this->statement->execute($this->parameters);
         } catch (PDOException $e) {
            throw new QueryException($e->getMessage(), $e->getCode());
         }
     }


     public function lastId(): int
     {
         return $this->pdo->lastInsertId();
     }
}