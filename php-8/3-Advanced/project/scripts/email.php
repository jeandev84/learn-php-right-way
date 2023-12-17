<?php

use Framework\App;
use Framework\Config\Config;
use Framework\Container\Container;
use Framework\Http\Request\Request;

require_once __DIR__.'/../vendor/autoload.php';

$container = new Container();

(new App($container))->boot()->run();


