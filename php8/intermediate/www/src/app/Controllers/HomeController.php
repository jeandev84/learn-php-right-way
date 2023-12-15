<?php
declare(strict_types=1);

namespace App\Controllers;


use App\Connection;
use App\Models\Invoice;
use App\Models\User;
use App\Repository\InvoiceRepository;
use App\Repository\UserRepository;
use Framework\App;
use Framework\Templating\View;
use App\Models\SignUp;
use PDO;
use PDOException;

class HomeController
{

     public function index(): View
     {
         $email  = 'john@brown.com';
         $name   = 'John Brown';
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