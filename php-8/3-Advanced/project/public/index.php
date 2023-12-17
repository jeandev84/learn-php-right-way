<?php

use App\Controllers\GeneratorExampleController;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\UserController;
use Framework\App;
use Framework\Config\Config;
use Framework\Container\Container;
use Framework\Http\Request\Request;
use Framework\Routing\Router;

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__.'/../storage');
define('VIEW_PATH', __DIR__.'/../views');


$container = new Container();
$router    = new Router($container);


$router->registerRoutesFromControllerAttributes(
    [
      HomeController::class,
      GeneratorExampleController::class,
      InvoiceController::class,
      UserController::class
    ]
);


/* dump($router->routes()); */


$request = Request::createFromGlobals();
(new App(
    $container,
    new Config($_ENV),
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]
))
->run();


