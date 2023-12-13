<?php

/** Variable, anonymous & arrow functions */

/*
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

$callback =1;
// anonymous function
$sum = function (int|float ...$numbers) use ($callback): int|float {
    echo $callback;
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


$items = [1, 2, 3, 4];
$callback = function ($element) {
    return $element * 2;
};

$callback = array_map($callback, $items);
echo '<pre>';
print_r($array1);

print_r($array2);
echo '</pre>';

// Closure is callable
$sum = function (callable $callback, int|float ...$numbers): int|float {
    return $callback(array_sum($numbers));
};

function doubleElement($element): int|float {
    return $element * 2;
}

// callback1
echo $sum('doubleElement', 1, 2, 3, 4);

// callback2
echo $sum(function ($element) {
    return $element * 2;
}, 1, 2, 3, 4);
*/


// Transform to Arrow function
$array = [1, 2, 3, 4];

/*
$array2 = array_map(function ($number) {
    return $number * $number;
}, $array);
*/

$array2 = array_map(fn($number) => $number * $number , $array);


echo '<pre>';
print_r($array2);
echo '</pre>';


