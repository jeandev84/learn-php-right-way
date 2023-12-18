<?php

use App\Controllers\CurlController;
use App\Controllers\GeneratorExampleController;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\UserController;
use Framework\App;
use Illuminate\Container\Container;
use Framework\Routing\Router;

require_once __DIR__.'/../vendor/autoload.php';


define('STORAGE_PATH', __DIR__.'/../storage');
define('VIEW_PATH', __DIR__.'/../views');


$container = new Container();
$router    = new Router($container);


$router->registerRoutesFromControllerAttributes(
    [
      HomeController::class,
      InvoiceController::class,
      UserController::class,
      CurlController::class
    ]
);


(new App(
    $container,
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]
))
->boot()->run();


