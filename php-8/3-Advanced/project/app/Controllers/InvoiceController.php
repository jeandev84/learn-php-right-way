<?php

namespace App\Controllers;

use App\Services\InvoiceService;
use Framework\Templating\View;

class InvoiceController
{

    public function __construct(protected  InvoiceService $invoiceService)
    {
    }


    public function index(): View
    {
        return View::make('invoices/index');
    }


    public function create(): View
    {
        return View::make('invoices/create');
    }



    public function store()
    {
        $amount = $_POST['amount'];

        dump($amount);
    }


    public function process(): View
    {
        $this->invoiceService->process([], 25);

        return View::make('index');
    }
}