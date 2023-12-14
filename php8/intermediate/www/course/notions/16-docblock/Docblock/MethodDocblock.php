<?php
namespace App\Docblock;


/**
 * @method int foo(string $x)
 * @method static int bar(string $y)
*/
class MethodDocblock
{
     public function __call(string $name, array $arguments)
     {

     }


     public static function __callStatic(string $name, array $arguments)
     {

     }
}