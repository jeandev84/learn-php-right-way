<?php
namespace App\PHP_8_1\Examples\NewInInitializers;

class Customer
{
      /*
      public function __construct(public ?Address $address = null)
      {
          $this->address ??= new Address();
      }
      */

      public function __construct(public ?Address $address = new Address())
      {
      }
}