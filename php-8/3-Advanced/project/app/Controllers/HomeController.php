<?php
declare(strict_types=1);

namespace App\Controllers;


use App\Connection;
use App\Models\Invoice;
use App\Models\User;
use App\Repository\InvoiceRepository;
use App\Repository\UserRepository;
use App\Services\InvoiceService;
use Framework\App;
use Framework\Container\Container;
use Framework\Templating\View;
use App\Models\SignUp;
use PDO;
use PDOException;

class HomeController
{

     public function index(): View
     {
         (new Container())->get(InvoiceService::class)->process([], 25);

         return View::make('index');
     }
}