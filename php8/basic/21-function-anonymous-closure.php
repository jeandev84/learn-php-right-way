<?php

/** Variable, anonymous & arrow functions */


/**
 * @param int|float ...$numbers
 * @return int|float
*/
function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

$func = 'sum';

if (is_callable($func)) {
    echo $func(1, 2, 3, 4);
} else {
    echo 'Not Callable';
}



