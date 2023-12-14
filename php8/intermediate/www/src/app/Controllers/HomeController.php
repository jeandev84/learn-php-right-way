<?php
declare(strict_types=1);

namespace App\Controllers;


class HomeController
{

     public function index(): string
     {
         return <<<FORM
<form action="/upload" method="post" enctype="multipart/form-data">
  <input type="file" name="receipt">
  <button type="submit">Upload</button>
</form>
FORM;

     }


     public function upload(): void
     {
          dump($_FILES);
          # dump(pathinfo($_FILES['receipt']['tmp_name']));

          $filePath = STORAGE_PATH . '/'. $_FILES['receipt']['name'];
          move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

          dump(pathinfo($filePath));
     }


     private function sessionCookies()
     {
         # $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

         # setcookie('userName', 'Brown', time() + 10, '/', '', false, false);
         /*
         setcookie('userName', 'Brown', [
             'expires' => time() + (24 * 60 * 60),
             'path'    => '/',
             'domain'  => '',
             'secure'  => false,
             'httpOnly' => false
         ]);
         setcookie('userName', 'Brown', time() + (24 * 60 * 60));
         */

         # return View::make('index', $_GET)->render();
     }
}