<?php

namespace App\Controllers;

use App\Enums\Color;
use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\Services\InvoiceService;
use Carbon\Carbon;
use Framework\Routing\Attributes\Get;
use Framework\Templating\View;
use Symfony\Component\Mailer\MailerInterface;

class InvoiceController
{

    #[Get('/invoices')]
    public function index(): View
    {
        $invoices = Invoice::allPaid();

        return View::make('invoices/index', [
            'invoices' => $invoices
        ]);
    }



    #[Get('/invoices/new')]
    public function create()
    {
        $invoice = new Invoice();

        $invoice->invoice_number = 5;
        $invoice->amount         = 20;
        $invoice->status         = InvoiceStatus::Pending;
        $invoice->due_date       = (new Carbon())->addDay();

        $invoice->save();

        echo $invoice->id . ', ' . $invoice->due_date->format('m/d/Y');
    }
}