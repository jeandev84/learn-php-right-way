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

$x =1;
// anonymous function
$sum = function (int|float ...$numbers) use ($x): int|float {
    echo $x;
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4);


// callback function
$array1 = [1, 2, 3, 4];
$array2 = array_map(function ($element) {
     return $element * 2;
}, $array1);
echo '<pre>';
print_r($array1);

print_r($array2);
echo '</pre>';

