<?php

use Framework\App;
use Framework\Config\Config;
use Framework\Container\Container;
use Framework\Http\Request\Request;

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$container = new Container();


$request = Request::createFromGlobals();
(new App(
    $container,
    new Config($_ENV)
))
->run($request);


