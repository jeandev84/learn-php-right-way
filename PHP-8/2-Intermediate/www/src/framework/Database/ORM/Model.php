<?php
declare(strict_types=1);

namespace Framework\Database\ORM;

use Framework\App;
use Framework\Database\DB;

abstract class Model
{
     protected DB $db;

     public function __construct()
     {
         $this->db = App::db();
     }
}