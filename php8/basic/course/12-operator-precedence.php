<?php

/* Operator Precedence & Associativity */
// https://www.php.net/manual/en/language.operators.precedence.php
/*
$x = (5 + 3) * 5;
echo $x;

$a = $b = 5;
*/

$x = 5;
$y = 2;
$z = 10;
$result = ($x / $y) * $z;


$x = true;
$y = false;
$z = true;
var_dump($x && $y || $z);

$a = true;
$b = false;

$z = ($a and $b);
var_dump($z);