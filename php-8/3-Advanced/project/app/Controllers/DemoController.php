<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use Framework\Templating\View;

class DemoController
{

    public function index(): View
    {
        $randomNumber = mt_rand(1, 100);
        $email  = "john$randomNumber@brown.com";
        $name   = "John Brown$randomNumber";
        $amount = 25;

        $userModel    = new User();
        $invoiceModel = new Invoice();
        $invoiceId    = (new SignUp($userModel, $invoiceModel))->register(
            [
                'email' => $email,
                'name'  => $name
            ],
            [
                'amount' => $amount
            ]
        );


        return View::make('index', [
            'invoice' => $invoiceModel->find($invoiceId)
        ]);
    }



    public function download()
    {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="myfile.pdf"');

        readfile(STORAGE_PATH. '/receipt-6-20-2021.pdf');
    }

    public function upload(): void
    {
        $filePath = STORAGE_PATH . '/'. $_FILES['receipt']['name'];
        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
    }
}