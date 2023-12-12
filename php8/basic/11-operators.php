<?php

/* OPERATORS */

// Arithmetic Operators (+ - * / % **)
$x = 10;
$y = 2;

var_dump($x + $y);
var_dump($x - $y);
var_dump($x * $y);
var_dump($x / $y);
var_dump(fdiv($x, $y));
var_dump($x % $y);
var_dump(fmod($x, $y));
var_dump($x ** $y);

// Assignment Operators (= += -= *= /= %= **=)
$x = $y = 1;
$x = $x + 2;
$x += 2;
$x -= 3;
$y *= 4;
$x /= 5;
$y %= 3;
$x **= 6;

// String Operators (. .=)
$x = 'Hello';
$x = $x . ' World';
echo $x;

$x .= ' World';
echo $x;

// Comparison Operators (== === =/=  <> ==/= < > <= >= <=> ?? ?:)
$x = 5;
$y = 3;

var_dump($x == $y);
var_dump($x === $y);
var_dump($x < $y);
var_dump($x > $y);
var_dump($x <= $y);
var_dump($x >= $y);
var_dump($x <=> $y);

$a = 'Hello World';
$b = strpos($x, 'H');
echo ($a === false ? 'H Not Found' : 'H Found at index '. $y);

$x    = null;
$y    = $x ?? 'hello';
$test = $k ?? 'oops';

// Error Control Operators (@)
// @unlink(__DIR__.'/demo.txt');

// Increment/Decrement Operators (++, --)

// Logical Operators (&& || ! and or xor)

// Bitwise Operators (& | ^ ~ << >>)

// Array Operators (+ == === =/= <> ==/=)

// Execution Operators (``)

// Type Operators (instanceof)

// Null safe Operator - PHP8 (?)