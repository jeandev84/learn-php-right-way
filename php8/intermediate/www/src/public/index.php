<?php
use Framework\Http\Request\Request;

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__.'/../storage');
define('VIEW_PATH', __DIR__.'/../views');


$router = new \Framework\Routing\Router();

$router->get('/', [\App\Controllers\HomeController::class, 'index'])
    ->get('/download', [\App\Controllers\HomeController::class, 'download'])
    ->post('/upload', [\App\Controllers\HomeController::class, 'upload'])
    ->get('/invoices', [\App\Controllers\InvoiceController::class, 'index'])
    ->get('/invoices/create', [\App\Controllers\InvoiceController::class, 'create'])
    ->post('/invoices/create', [\App\Controllers\InvoiceController::class, 'store'])
;

$request = Request::createFromGlobals();

(new \Framework\App($router, [
    'driver'   => $_ENV['DB_DRIVER'],
    'host'     => $_ENV['DB_HOST'],
    'user'     => $_ENV['DB_USER'],
    'pass'     => $_ENV['DB_PASS'],
    'database' => $_ENV['DB_DATABASE']
]))
->run($request);