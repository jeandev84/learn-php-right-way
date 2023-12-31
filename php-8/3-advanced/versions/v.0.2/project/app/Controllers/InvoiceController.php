<?php

namespace App\Controllers;

use App\Enums\Color;
use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\Services\InvoiceService;
use Framework\Routing\Attributes\Get;
use Framework\Templating\View;

class InvoiceController
{

    public function __construct(protected  InvoiceService $invoiceService)
    {
    }


    #[Get('/invoices')]
    public function index(): View
    {
        dump(enum_exists(InvoiceStatus::class));
        dump(InvoiceStatus::cases());
        dump(InvoiceStatus::fromColor(Color::Green));

        $invoices = (new Invoice())->all(InvoiceStatus::Paid);

        return View::make('invoices/index', [
            'invoices' => $invoices
        ]);
    }


    public function create(): View
    {
        return View::make('invoices/create');
    }



    public function store()
    {
        $amount = $_POST['amount'];

        dump($amount);
    }


    public function process(): View
    {
        $this->invoiceService->process([], 25);

        return View::make('index');
    }
}