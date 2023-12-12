<?php

/* FLOATS */

$a = 13.5;
$b = 13.5e3;
$c = 13.5e-3;
$d = 13_000.5;

var_dump($a, $b, $c, $d);


echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;

$x = floor((0.1 + 0.7) * 10);
echo $x;
