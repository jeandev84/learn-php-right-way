<?php
declare(strict_types=1);

namespace App\Controllers;


use App\Connection;
use App\Repository\InvoiceRepository;
use App\Repository\UserRepository;
use Framework\Templating\View;
use PDO;
use PDOException;

class HomeController
{

     public function index(): View
     {
         $pdo = Connection::make();
         try {
             $userRepository    = new UserRepository($pdo);
             $invoiceRepository = new InvoiceRepository($pdo);
             $users = $userRepository->findAll();

             /*
             $pdo->beginTransaction();
             $user  = $userRepository->findByEmail($_GET['email'] ?? 'john@doe.com');
             # dd($user);

             $id = $userRepository->insert([
                 'email' => $_GET['email'] ?? 'some1@email.com',
                 'full_name' => 'John Doe',
                 'is_active' => 1,
                 'created_at' => date('Y-m-d H:i:s', strtotime('07/11/2021 9:00PM'))
             ]);

             dd($id);

             $user = $userRepository->find(6);
             dd($user);

             $date = date('Y-m-d H:i:s', strtotime('07/11/2021 9:00PM'));
             $id = $userRepository->insert([
                 'email'       => $_GET['email'] ?? 'some2@email.com',
                 'full_name'   => 'John Doe',
                 'is_active'   => 1,
                 'created_at'  => $date,
                 'updated_at'  => $date
             ]);

             $userId = $userRepository->insert([
                 'email' => 'john1@doe.com',
                 'full_name' => 'John Doe 1',
                 'is_active' => 1,
                 'created_at' => date('Y-m-d H:i:s', strtotime('07/11/2021 9:00PM'))
             ]);

             $invoiceId = $invoiceRepository->insert([
                 'amount' => 25,
                 'user_id' => $userId
             ]);

             $pdo->commit();

             dd("Invoice ID: $invoiceId");
             */

         } catch (PDOException $e) {
             if ($pdo->inTransaction()) {
                 $pdo->rollBack();
             }
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