<?php

namespace App\Coffee\Makers;

class CoffeeMaker
{
      public function makeCoffee(): void
      {
          echo static::class . ' is making coffee', PHP_EOL;
      }
}