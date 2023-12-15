<?php

// Constants
/*
define('STATUS_PAID', 'paid');
echo defined('STATUS_PAID');
echo STATUS_PAID;

const STATUS_PAID = 'paid';

if(true) {
  define('STATUS_PAID', 9);
}

$paid = 'paid';
define('STATUS_'. $paid, $paid);
echo STATUS_PAID; !!!

echo PHP_VERSION;
echo __FILE__;
echo __LINE__;

// Variables variables;

$foo  = 'bar';
$$foo = 'baz';
$bar  = 'baz';
echo $foo, $bar;
*/

$foo  = 'bar';
$$foo = 'baz';
echo  "$foo, ${$foo}";





