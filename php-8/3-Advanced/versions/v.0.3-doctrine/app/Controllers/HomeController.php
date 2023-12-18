<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\InvoiceService;
use Framework\Routing\Attributes\Enums\HttpMethod;
use Framework\Routing\Attributes\Route;
use Framework\Routing\Attributes\Get;
use Framework\Routing\Attributes\Post;
use Framework\Routing\Attributes\Put;
use Framework\Templating\View;

class HomeController
{

    // #[Get('/')]
    // private int $x;



    public function __construct(protected  InvoiceService $invoiceService)
    {
    }


     // #[Route('/')]
     #[Get('/')]
     // #[Get(path: '/home')]
     #[Route('/home', HttpMethod::Head)]
     #[Post(path: '/home')]
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