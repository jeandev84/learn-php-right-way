<?php
declare(strict_types=1);

namespace Framework\Database\ORM;

use Framework\App;
use Framework\Database\Connection\Connection;
use Framework\Database\DB;
use Generator;

abstract class Model
{
     protected DB $db;

    /**
     *
     */
     public function __construct()
     {
         $this->db = Connection::make([
             'database'   => $_ENV['DB_DATABASE'],
             'user'       => $_ENV['DB_USER'],
             'password'   => $_ENV['DB_PASS'],
             'host'       => $_ENV['DB_HOST'],
             'driver'     => $_ENV['DB_DRIVER'] ?? 'mysql'
         ]);
     }


    public function fetchLazy(PDOStatement $stmt): Generator
    {
        foreach($stmt as $record) {
            yield $record;
        }
    }
}