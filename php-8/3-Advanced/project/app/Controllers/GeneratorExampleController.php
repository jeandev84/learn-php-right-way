<?php

namespace App\Controllers;

use App\Models\Ticket;
use App\Services\GeneratorService;
use Framework\Routing\Attributes\Route;
use Generator;

class GeneratorExampleController
{

      public function __construct(
          protected GeneratorService $generatorService,
          protected Ticket $ticketModel
      )
      {
      }


      #[Route('/examples/generator')]
      public function index()
      {
          /* $this->generatorService->loopNumbersFor(1, 10); */
          /* dump($this->ticketModel->all()); */

          $tickets = $this->ticketModel->all();

          foreach ($tickets as $ticket) {
              echo $ticket['id'] . ': '. substr($ticket['content'], 0, 15) . '<br/>';
          }

          # $tickets->rewind();
      }
}