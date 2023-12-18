<?php

namespace App\Controllers;

use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use Carbon\Carbon;
use Framework\Routing\Attributes\Get;
use Framework\Templating\View;
use Twig\Environment as Twig;

class InvoiceController
{


    public function __construct(private Twig $twig)
    {
    }

    #[Get('/invoices')]
    public function index(): string
    {
        $invoices = Invoice::allPaid();

        return $this->twig->render('invoices/index.twig', [
            'invoices' => $invoices
        ]);
    }
}