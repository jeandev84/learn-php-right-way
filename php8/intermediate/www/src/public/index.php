<?php

require_once __DIR__.'/../vendor/autoload.php';

$obj = new \App\AnonymousClasses\ClassA(1, 2);

var_dump($obj->bar());