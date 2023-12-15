<?php
declare(strict_types=1);

namespace App\Controllers;


use Framework\Templating\View;

class HomeController
{

     public function index(): View
     {
         return View::make('index', ['foo' => 'bar']);

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