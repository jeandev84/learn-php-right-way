<?php

namespace App\Controllers;

use App\Services\GeneratorService;
use Generator;

class GeneratorExampleController
{

      public function __construct(protected GeneratorService $generatorService)
      {
      }

      public function index()
      {
          $this->generatorService->loopNumbers(1, 10);
      }
}