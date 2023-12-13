<?php
declare(strict_types=1);
/** Functions */

/*
function multi(int|float $x, int|float $y = 10): int|float {
    if ($x % 2 === 0) {
        $x /= 2;
    }
    return $x * $y;
}

echo multi(5.0, 10);

function sum(...$numbers): int|float {
    return array_sum($numbers);
}

echo sum(6.0, 7, 50, 100, 25, 8, 9);


function sum(int|float $x, int|float $y, int|float ...$numbers): int|float {
    return $x + $y + array_sum($numbers);
}


$a = 6.0;
$b = 7;
echo sum($a, $b, 50, 100, 25, 8, 9);

$a       = 6.0;
$b       = 7;
$numbers = [50, 100, 25, 8, 9];
echo sum($a, $b, ...$numbers);

*/


function foo(int $x, int $y): int {
    if ($x % $y === 0) {
        return $x / $y;
    }
    return $x;
}

$x = 6;
$y = 3;

# setcookie(name: 'foo', value: 'bar', httponly: true);

echo foo($x, y: $y);

