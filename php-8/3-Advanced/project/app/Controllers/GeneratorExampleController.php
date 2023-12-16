<?php

namespace App\Controllers;

use Generator;

class GeneratorExampleController
{

      public function __construct()
      {
      }

      public function index()
      {
         /* $numbers = range(1, 100); */

          $numbers = $this->lazyRange(1, 3000000);

          echo $numbers->current();
          $numbers->next();
          echo $numbers->current();
          $numbers->next();
          echo $numbers->current();
      }


      /**
       * @param int $start
       * @param int $end
       * @return Generator
      */
      private function lazyRange(int $start, int $end): Generator
      {
          echo 'Hello!';
          for ($i = $start; $i <= $end; $i++) {
             yield $i;
          }
      }
}