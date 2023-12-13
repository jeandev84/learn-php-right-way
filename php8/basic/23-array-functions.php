<?php

require 'functions/helpers.php';

# array_chunk()
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray($items);
prettyPrintArray(array_chunk($items, 2));
prettyPrintArray(array_chunk($items, 2, true));


# array_combine()
$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));


# array_filter(array $array, callable|null $callback = null, int $mode = 0): array

$array = [1, 2, 3, 4, 5, 6, 6, 8, 9, 10];

$evens = array_filter($array, fn($number) => $number % 2 === 0);
prettyPrintArray($evens);

$evens = array_filter($array, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_KEY);
prettyPrintArray($evens);

$evens = array_filter($array, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);
$evens = array_values($evens);

prettyPrintArray($evens);