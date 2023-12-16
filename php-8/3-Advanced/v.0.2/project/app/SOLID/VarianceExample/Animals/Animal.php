<?php
declare(strict_types=1);

namespace App\SOLID\VarianceExample\Animals;

abstract class Animal
{

      /**
       * @var string
      */
      protected string $name;


      /**
       * @param string $name
      */
      public function __construct(string $name)
      {
          $this->name = $name;
      }


      abstract public function speak();
}