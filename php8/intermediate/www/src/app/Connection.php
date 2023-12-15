<?php

namespace App;

use PDO;
use PDOException;

class Connection
{
      public static function make(): PDO
      {
          try {
              return new PDO('mysql:host=db;dbname=my_db', 'root', 'root', [
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
              ]);
          } catch (PDOException $e) {
              throw new PDOException($e->getMessage(), $e->getCode());
          }
      }
}