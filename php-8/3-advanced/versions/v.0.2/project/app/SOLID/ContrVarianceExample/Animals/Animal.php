<?php
declare(strict_types=1);

namespace App\SOLID\ContrVarianceExample\Animals;

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


      public function eat(AnimalFood $food)
      {
         echo $this->name . " eats ". get_class($food);
      }
}