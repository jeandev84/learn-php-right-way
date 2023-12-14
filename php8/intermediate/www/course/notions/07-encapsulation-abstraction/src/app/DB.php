<?php

namespace App;

class DB
{
     public static ?StaticMethodsProperties\DB $instance = null;

     private function __construct(public array $config)
     {
         echo 'Instance Created<br>';
     }



     public static function getInstance(array $config): StaticMethodsProperties\DB
     {
          if (self::$instance === null) {
              self::$instance = new StaticMethodsProperties\DB($config);
          }

          return self::$instance;
     }
}