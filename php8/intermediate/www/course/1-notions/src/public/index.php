<?php

require_once __DIR__.'/../vendor/autoload.php';


$router = new \framework\Routing\Router();

$router->register('/', function () {
    return 'HomeController';
});


$router->register('/invoices', function () {
    return 'Invoices';
});


dd($router->getRoutes());