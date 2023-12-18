<?php

declare(strict_types=1);

use App\Models\Invoice;
use App\Models\InvoiceItem;

require_once __DIR__.'/../eloquent.php';

$invoice = new Invoice();

$invoice->amount = 45;
$invoice->invoice_number = '1';
$invoice->status = \App\Enums\InvoiceStatus::Pending;
$invoice->due_date = (new \Carbon\Carbon())
                     ->addDays(10);

$invoice->save();

$items = [
    ['Item 1', 1, 15],
    ['Item 2', 2, 7.5],
    ['Item 3', 4, 3.75],
];


foreach ($items as [$description, $quantity, $unitPrice]) {
    $item = new InvoiceItem();
    $item->description = $description;
    $item->quantity    = $quantity;
    $item->unit_price  = $unitPrice;
    $item->invoice_id  = $invoice->id;

    $item->invoice()->associate($invoice);

    $item->save();
}