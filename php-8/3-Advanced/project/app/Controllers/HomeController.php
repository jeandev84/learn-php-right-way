<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\InvoiceService;
use Framework\Routing\Attributes\Route;
use Framework\Routing\Attributes\Methods\Get;
use Framework\Routing\Attributes\Methods\Post;
use Framework\Routing\Attributes\Methods\Put;
use Framework\Templating\View;

class HomeController
{

    public function __construct(protected  InvoiceService $invoiceService)
    {
    }


     // #[Route('/')]
     #[Get('/')]
     public function index(): View
     {
         $this->invoiceService->process([], 25);

         return View::make('index');
     }



    // #[Route('/', 'POST')]
    #[Post('/')]
    public function store()
    {

    }



    // #[Route('/', 'PUT')]
    #[Put('/')]
    public function update()
    {

    }
}