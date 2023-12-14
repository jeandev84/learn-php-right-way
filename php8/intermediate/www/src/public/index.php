<?php

require_once __DIR__.'/../vendor/autoload.php';


$router = new \App\Routing\Router();

$router->register('/', [\App\Controllers\HomeController::class, 'index'])
       ->register('/invoices', [\App\Controllers\InvoiceController::class, 'index'])
       ->register('/invoices/create', [\App\Controllers\InvoiceController::class, 'create'])
;

echo $router->resolve($_SERVER['REQUEST_URI']);