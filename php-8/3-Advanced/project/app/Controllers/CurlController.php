<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\Routing\Attributes\Get;
use Framework\Validation\Contracts\EmailValidationInterface;

class CurlController
{

      public function __construct(
          protected EmailValidationInterface $emailValidationService
      )
      {
      }

      #[Get('/curl')]
      public function index()
      {
           $result = $this->emailValidationService->verify($_ENV['YOUR_EMAIL']);

           echo '<pre>';
           print_r($result);
           echo '</pre>';
      }
}