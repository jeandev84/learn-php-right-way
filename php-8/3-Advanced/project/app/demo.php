<?php

declare(strict_types=1);

use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Carbon\Carbon;
use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__.'/../eloquent.php';

/*
Save data Eloquent

Capsule::connection()->transaction(function () {

    $invoice = new Invoice();

    $invoice->amount = 45;
    $invoice->invoice_number = '1';
    $invoice->status = InvoiceStatus::Pending;
    $invoice->due_date = (new Carbon())->addDays(10);

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
});

// (new Invoice())->newQuery()->where();
// (new Invoice())->where();

# Update record eloquent
$invoiceId  = 2;
$sql = Invoice::query()->where('id', $invoiceId)->toSql();

Invoice::query()->where('id', $invoiceId)->update(['status' => InvoiceStatus::Paid]);
*/


# Fetch data or join and complex query
$invoiceId  = 1;
Invoice::query()->where('id', $invoiceId)->update(['status' => InvoiceStatus::Paid]);


/*
Invoice::query()
        ->where('status', InvoiceStatus::Paid)
        ->get()
        ->each(function (Invoice $invoice) {
            // dd($invoice->status);
            echo $invoice->id . ', '.
                 $invoice->status->toString() . ', '.
                 $invoice->created_at->format('m/d/Y') . PHP_EOL;
        });

// Update
Invoice::where('status', InvoiceStatus::Paid)
         ->get()
         ->each(function (Invoice $invoice) {
               echo $invoice->id . ', '. $invoice->status->toString() . ', '. $invoice->created_at->format('m/d/Y') . PHP_EOL;

               # $items = $invoice->items()->get();
               # $items = $invoice->items()->where('description', 'awda')->get();
               # $items = $invoice->items()->where('description', 'awda')->update(['description' => 'foo bar']);
               # $item = $invoice->items()->first(); or $invoice->items->first();
               # dump($item->id);
               $item = $invoice->items->first();

               $item->description = 'Item 1';

               # $item->save(); if you went to save only item

               $invoice->invoice_number = '3';

               # $invoice->save(); will be update only invoice
               $invoice->push();   # will be update item and invoice

         });
*/


// Delete
Invoice::where('status', InvoiceStatus::Paid)
    ->get()
    ->each(function (Invoice $invoice) {
        echo $invoice->id . ', '. $invoice->status->toString() . ', '. $invoice->created_at->format('m/d/Y') . PHP_EOL;

        # Delete all item
        # $invoice->items()->delete();

        # $item = $invoice->items->first();
        # $item->delete();

        $invoice->items()
                ->where('description', 'Item 2')
                ->delete();
    });
