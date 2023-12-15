<?php

namespace App\Cloning;

class Invoice
{

     private string $id;


     public function __construct()
     {
         $this->id = uniqid('invoice_');
         var_dump('__construct');
     }


     /*
     public static function create(): static
     {
         return new static();
     }


     public function copy(): static
     {
         return clone $this;
     }
     */


    public function __clone(): void
    {
        // will be executed after cloning object
        $this->id = uniqid('invoice_');
        var_dump('__clone');
    }
}