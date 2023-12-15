<?php

namespace Framework\Database\ORM;

use PDO;
use PDOStatement;


class EntityRepository
{

    protected PDO $pdo;
    protected string $classMapping;
    protected string $tableName;

    public function __construct(PDO $pdo, string $classMapping, string $tableName)
    {
        $this->pdo = $pdo;
        $this->classMapping = $classMapping;
        $this->tableName = $tableName;
    }


    public function findAll(): mixed
    {
        return $this->query("SELECT * FROM $this->tableName")->fetchAll();
    }


    public function findBy(array $criteria): mixed
    {
        return $this->fetchBy($criteria)->fetchAll();
    }



    public function findOneBy(array $criteria): mixed
    {
        return $this->fetchBy($criteria)->fetch();
    }



    public function find(int $id): mixed
    {
        return $this->statement("SELECT * FROM $this->tableName WHERE id = :id",
                 compact('id')
               )->fetch();
    }


    public function insert(array $data): int
    {
         $columns = join(', ', array_keys($data));
         $valuesQ = [];
         foreach (array_keys($data) as $column) {
             $valuesQ[] = ":$column";
         }
         $values = join(', ', $valuesQ);

         $status = $this->executeStatement("INSERT INTO $this->tableName ($columns) VALUES ($values)", $data);

         return (int)($status ? $this->pdo->lastInsertId() : 0);
    }




    public function update(array $data, int $id): bool
    {
        $columns = [];
        foreach (array_keys($data) as $column) {
            $columns[] = "$column = :$column";
        }

        $sets = join(', ', $columns);
        $data['id'] = $id;

        return $this->executeStatement("UPDATE  $this->tableName SET $sets WHERE id = :id", $data);
    }



    public function delete(int $id): bool
    {
        return $this->executeStatement("DELETE FROM $this->tableName WHERE id = :id", compact('id'));
    }


    public function query(string $sql): \PDOStatement
    {
         return $this->pdo->query($sql);
    }


    public function statement(string $sql, array $params = []): \PDOStatement
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        return $statement;
    }


    private function executeStatement(string $sql, array $params = []): bool
    {
        $statement = $this->pdo->prepare($sql);
        return $statement->execute($params);
    }


    protected function fetchBy(array $criteria): PDOStatement
    {
        if (empty($criteria)) {
            throw new \InvalidArgumentException("empty criteria params.");
        }

        $wheres = [];
        $sql    = "SELECT * FROM $this->tableName";
        foreach (array_keys($criteria) as $column) {
            $wheres[] = "$column = :$column";
        }
        $sql .= " WHERE ". join(' AND ', $wheres);

        return $this->statement($sql, $criteria);
    }
}