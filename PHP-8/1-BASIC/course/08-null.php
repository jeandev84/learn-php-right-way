<?php

/* NULL */
var_dump(isset($a));

// null constant
$x = null;
echo $x;

var_dump(is_null($x));
var_dump($x === null);

var_dump((string)$x);
var_dump((int)$x);
var_dump((bool)$x);
var_dump((array)$x);


$b = 123;
var_dump($b);
unset($b);

