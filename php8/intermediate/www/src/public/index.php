<?php

require_once __DIR__.'/../vendor/autoload.php';

echo \App\StaticBindings\ClassA::getName(), PHP_EOL;
echo \App\StaticBindings\ClassB::getName(), PHP_EOL;