<?php

/** Functions */


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