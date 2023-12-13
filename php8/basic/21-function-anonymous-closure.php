<?php

/** Variable, anonymous & arrow functions */


/**
 * @param int|float ...$numbers
 * @return int|float
*/
function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

// variable function
$func = 'sum';

if (is_callable($func)) {
    echo $func(1, 2, 3, 4);
} else {
    echo 'Not Callable';
}


// anonymous function
$sum = function (int|float ...$numbers): int|float {
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4);



