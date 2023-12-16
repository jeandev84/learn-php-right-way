<?php

namespace App\Services;

use Generator;

class GeneratorService
{

     /**
      * Work like method range() in php
      *
      * @param int $start
      * @param int $end
      * @return array
     */
     public function range(int $start, int $end): array
     {
         $numbers = [];

         for ($i = $start; $i <= $end; $i++) {
             $numbers[] = $i;
         }

         return $numbers;
     }




    /**
     * @param int $start
     * @param int $end
     * @return Generator
    */
    public function lazyRange(int $start, int $end): Generator
    {
        for ($i = $start; $i <= $end; $i++) {
            yield $i;
        }
    }



    public function exampleUseLazyRange(): void
    {
        $numbers = $this->lazyRange(1, 3000000);

        echo $numbers->current();
        $numbers->next();
        echo $numbers->current();
        $numbers->next();
        echo $numbers->current();
    }



    public function yieldTo(int $start, int $end): Generator
    {
         echo 'Hello';
         yield $start;
         echo 'World';
         yield $end;
    }



    public function exampleYieldTo(): void
    {
        $numbers = $this->yieldTo(1, 3000000);

        echo $numbers->current();
        $numbers->next();
        echo $numbers->current();
        $numbers->next();
        echo $numbers->current();
    }
}