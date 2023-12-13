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


# array_keys(array $keys, mixed $search_value, bool $strict = false): array

$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$keys  = array_keys($array);
prettyPrintArray($keys);

$keys  = array_keys($array, 5);
prettyPrintArray($keys);

$keys  = array_keys($array, 10);
prettyPrintArray($keys);

$keys  = array_keys($array, 15);
prettyPrintArray($keys);

$keys  = array_keys($array, 15, true);
prettyPrintArray($keys);


# array_map(callable|null $callback, array $array, array ...$arrays): array

$array = [1, 2, 3, 4, 5, 6, 6, 8, 9, 10];
$array = array_map(fn($number) => $number * 3, $array);
prettyPrintArray($array);


$array1  = ['a' => 1, 'b' => 2, 'c' => 3];
$array2  = ['d' => 4, 'e' => 5, 'f' => 6];

$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);
prettyPrintArray($array);


# array_merge(array ...$arrays): array

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);
prettyPrintArray($merged);


# array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed

$invoiceItems = [
  ['price' => 9.99,   'qty' => 3, 'desc' => 'Item 1'],
  ['price' => 29.99,  'qty' => 1, 'desc' => 'Item 2'],
  ['price' => 149,    'qty' => 1, 'desc' => 'Item 3'],
  ['price' => 14.99,  'qty' => 2, 'desc' => 'Item 4'],
  ['price' => 4.99,   'qty' => 4, 'desc' => 'Item 5']
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price']
);

echo $total;


$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price'],
500
);

echo $total;


# array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];
$key   = array_search('D', $array);
echo $key;

if ($key === false) {
    echo 'Letter not found';
}

if (in_array('a', $array)) {
    echo 'Letter found';
}


# Difference array_diff and array_diff_assoc

$array1  = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2  = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array3  = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($array1, $array2, $array3));
prettyPrintArray(array_diff_assoc($array1, $array2, $array3));
prettyPrintArray(array_diff_key($array1, $array2, $array3));


# sorting by values
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];
asort($array);
prettyPrintArray($array);

// sort by keys
ksort($array);
prettyPrintArray($array);