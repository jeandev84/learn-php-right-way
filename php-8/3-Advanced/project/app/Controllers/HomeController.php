<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\InvoiceService;
use Framework\Routing\Attributes\Route;
use Framework\Templating\View;

class HomeController
{

    public function __construct(protected  InvoiceService $invoiceService)
    {
    }


     #[Route('/')]
     public function index(): View
     {
         $this->invoiceService->process([], 25);

         return View::make('index');
     }
}