<?php

namespace App\Controllers;

class InvoiceController
{
    public function index(): string
    {
        # dump($_SESSION);
        # setcookie('userName', 'Brown', time() - (24 * 60 * 60));
        return 'Invoices';
    }


    public function create(): string
    {
        return '<form action="/invoices/create" method="post">
                   <label>Amount</label>
                   <input type="text" name="amount">
                   </form>
                ';
    }



    public function store()
    {
        $amount = $_POST['amount'];

        dump($amount);
    }
}