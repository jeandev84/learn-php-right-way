<?php

/* FLOATS */

$a = 13.5;
$b = 13.5e3;
$c = 13.5e-3;
$d = 13_000.5;

var_dump($a, $b, $c, $d);


echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;

$floor1 = floor((0.1 + 0.7) * 10); // 7
echo $floor1;

$floor2 = floor(7.9999999999911118); // 7
echo $floor2;

$ceil1 = ceil((0.1 + 0.7) * 10); // 8
echo $ceil1;

$ceil2 = ceil((0.1 + 0.2) * 10); // 4
echo $ceil2;


$x = 0.23;
$y = 1 -0.77;

var_dump($x, $y);
echo ($x === $y) ? 'Yes' : 'No';

$ceil3 = ceil((0.1 + 0.2) * 10);
echo $ceil3;


echo NAN; // Not A Number
echo log(-1);
echo INF;
echo PHP_FLOAT_MAX * 2;


