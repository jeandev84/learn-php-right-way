<?php
declare(strict_types=1);


// OLD
function sum(float ...$num): float
{
    return array_sum($num);
}

$closure = Closure::fromCallable('sum');
var_dump($closure);
echo $closure(2, 5) . PHP_EOL;


// NEW
$closure = sum(...); // <==> $closure = Closure::fromCallable('sum');
var_dump($closure);
echo $closure(2, 5) . PHP_EOL;