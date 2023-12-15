<?php
$title = 'Home';
require __DIR__ . '/pages/home.php';

/*
require_once __DIR__.'/pages/home.php';
include __DIR__.'/pages/home.php';
include_once __DIR__.'/pages/home.php';
*/

$config = require __DIR__ . '/config/app.php';
var_dump($config);
