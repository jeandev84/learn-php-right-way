<?php

namespace App\Controllers;

use Framework\Templating\View;

class InvoiceController
{
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
}