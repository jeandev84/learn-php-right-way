<?php

require __DIR__.'/vendor/autoload.php';

/*
$invoice1 = new \App\WeakMap\Invoice();
$invoice2 = $invoice1;

echo 'Unsetting Invoice 1'. PHP_EOL;
unset($invoice1);
echo 'Unset Invoice 1'. PHP_EOL;

var_dump($invoice2);
*/

$invoice1 = new \App\WeakMap\Invoice();
$map = new WeakMap();

$map[$invoice1] = [
  'a' => 1,
  'b' => 2
];

/*
var_dump($map[$invoice1]);
var_dump(count($map));
*/


var_dump(count($map));
unset($invoice1);
var_dump(count($map));

var_dump($map);


