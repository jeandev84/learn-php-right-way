<?php

require_once __DIR__.'/../vendor/autoload.php';


$router = new \App\Routing\Router();

$router->map('/', function () {
    return 'HomeController';
});


$router->map('/invoices', function () {
    return 'Invoices';
});


dd($router->getRoutes());