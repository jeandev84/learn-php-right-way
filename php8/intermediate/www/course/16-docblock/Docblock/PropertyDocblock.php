<?php
namespace App\Docblock;


/**
 * @property int $x
 * @property float $y
 * @property-read int $a
 * @property-write float $b
*/
class PropertyDocblock
{
      public function __get(string $name)
      {

      }


      public function __set(string $name, $value): void
      {

      }
}