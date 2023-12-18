<?php

namespace App\Services\Generators;

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


    /**
     * @param int $start
     * @param int $end
     * @return Generator
    */
    public function lazyRangeMultiplyByFive(int $start, int $end): Generator
    {
        for ($i = $start; $i <= $end; $i++) {
            yield $i * 5 => $i;
        }
    }


    public function loopNumbersFor(int $start, int $end): void
    {
        # $numbers = $this->lazyRange($start, $end);
        $numbers = $this->lazyRangeMultiplyByFive($start, $end);

        foreach ($numbers as $key => $value) {
            echo '<div>'. $key . ': '. $value . '</div>';
        }
    }




    public function exampleUseLazyRange(): void
    {
        /* $numbers = range(1, 100); */

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
         return '!';
    }



    public function exampleYieldTo(): void
    {
        $numbers = $this->yieldTo(1, 3000000);

        echo $numbers->current();
        $numbers->next();
        echo $numbers->current();
        $numbers->next();
        echo $numbers->current();
        $numbers->next();
        echo $numbers->getReturn();
    }
}