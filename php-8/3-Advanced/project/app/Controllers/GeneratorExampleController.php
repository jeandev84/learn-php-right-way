<?php

namespace App\Controllers;

use App\Models\Ticket;
use App\Services\GeneratorService;
use Generator;

class GeneratorExampleController
{

      public function __construct(
          protected GeneratorService $generatorService,
          protected Ticket $ticketModel
      )
      {
      }

      public function index()
      {
          /* $this->generatorService->loopNumbersFor(1, 10); */
          /* dump($this->ticketModel->all()); */

          foreach ($this->ticketModel->all() as $ticket) {
              echo $ticket['id'] . ': '. substr($ticket['content'], 0, 15) . '<br/>';
          }
      }
}