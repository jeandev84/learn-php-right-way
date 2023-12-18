<?php
declare(strict_types=1);

namespace App\Controllers;

use App\cURL\CurlServiceExample;
use Framework\Routing\Attributes\Get;

class CurlController
{

      public function __construct(
          protected CurlServiceExample $curlServiceExample
      )
      {
      }

      #[Get('/curl')]
      public function index()
      {
           $this->curlServiceExample->callEmailableService();
      }
}