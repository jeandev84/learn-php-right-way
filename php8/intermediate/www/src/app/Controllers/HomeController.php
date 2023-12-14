<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Templating\View;

class HomeController
{

     public function index(): string
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

         return View::make('index', $_GET)->render();
     }
}