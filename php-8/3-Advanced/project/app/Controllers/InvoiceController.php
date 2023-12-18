<?php

namespace App\Controllers;

use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use Carbon\Carbon;
use Framework\Routing\Attributes\Get;
use Framework\Templating\View;
use Framework\Templating\Contract\RenderInterface;


class InvoiceController
{


    public function __construct(protected RenderInterface $render)
    {
    }

    #[Get('/invoices')]
    public function index(): string
    {
        $invoices = Invoice::allPaid();

        return $this->render->render('invoices/index.twig', [
            'invoices' => $invoices
        ]);
    }
}