<?php

require_once __DIR__.'/../vendor/autoload.php';


$router = new \App\Routing\Router();

$router->map('/', [\App\Controllers\HomeController::class, 'index'])
       ->map('/invoices', [\App\Controllers\InvoiceController::class, 'index'])
       ->map('/invoices/create', [\App\Controllers\InvoiceController::class, 'create'])
;

echo $router->dispatch($_SERVER['REQUEST_URI']);