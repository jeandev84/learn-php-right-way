<?php

namespace App\Controllers;

use App\Models\Ticket;
use App\Services\GeneratorService;

class TicketController
{

    public function __construct(protected Ticket $ticketModel)
    {
    }

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