<?php
declare(strict_types=1);

namespace App\Controllers;


use App\Connection;
use App\Repository\UserRepository;
use Framework\Templating\View;
use PDO;
use PDOException;

class HomeController
{

     public function index(): View
     {
         try {
             $pdo = Connection::make();
             $repository = new UserRepository($pdo);
             $users = $repository->findAll();
             $user  = $repository->findByEmail($_GET['email'] ?? 'john@doe.com');
             # dd($user);

             $id = $repository->insert([
                 'email' => $_GET['email'] ?? 'some@email.com',
                 'full_name' => 'John Doe',
                 'is_active' => 1,
                 'created_at' => date('Y-m-d H:i:s', strtotime('07/11/2021 9:00PM'))
             ]);

             dd($id);

         } catch (PDOException $e) {
             throw new PDOException($e->getMessage());
         }

         return View::make('index');
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