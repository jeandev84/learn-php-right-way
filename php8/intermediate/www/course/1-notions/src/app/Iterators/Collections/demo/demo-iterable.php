<?php


$invoiceCollection = new \App\Iterators\Invoices\InvoiceIteratorAggregate([
    new \App\Iterators\Invoices\Invoice(15),
    new \App\Iterators\Invoices\Invoice(25),
    new \App\Iterators\Invoices\Invoice(50),
]);

foreach ($invoiceCollection as $invoice) {
    echo $invoice->id . ' - '. $invoice->amount . PHP_EOL;
}


foo($invoiceCollection);
foo([1, 2, 3]);


// $iterable : Collection | iterable
function foo(iterable $iterable): void {
    foreach ($iterable as $i => $item) {
        // ...
        echo $i . PHP_EOL;
    }
}