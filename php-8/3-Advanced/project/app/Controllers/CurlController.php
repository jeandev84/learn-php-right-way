<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\Emailable\EmailValidationService;
use Framework\Routing\Attributes\Get;

class CurlController
{

      public function __construct(
          protected EmailValidationService $emailValidationService
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