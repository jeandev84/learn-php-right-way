<?php

namespace App\PHP_8_1\Examples\PureIntersectionType;

class MyServiceBoth
{
      public function __construct(private Syncable&Payable $entity)
      {
      }
      


      public function handle(): void
      {
          $this->entity->pay();
          $this->entity->sync();
      }
}