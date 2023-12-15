<?php
declare(strict_types=1);

namespace App\Controllers;


use Framework\Templating\View;

class HomeController
{

     public function index(): View
     {
         return View::make('index', $_GET);

     }


     public function upload(): void
     {
          dump($_FILES);
          # dump(pathinfo($_FILES['receipt']['tmp_name']));

          $filePath = STORAGE_PATH . '/'. $_FILES['receipt']['name'];
          move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

          dump(pathinfo($filePath));
     }
}