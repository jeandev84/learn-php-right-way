<?php

use Framework\Config\Config;
use Framework\Http\Request\Request;

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__.'/../storage');
define('VIEW_PATH', __DIR__.'/../views');


$container = new \Framework\Container\Container();
$router    = new \Framework\Routing\Router($container);

$router->get('/', [\App\Controllers\HomeController::class, 'index'])
       ->get('/examples/generator', [\App\Controllers\GeneratorExampleController::class, 'index'])
;

$request = Request::createFromGlobals();
(new \Framework\App($container, $router, new Config($_ENV)))
->run($request);


