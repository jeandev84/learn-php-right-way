<?php
declare(strict_types=1);

require __DIR__.'/Shopping/SalesTaxCalculator.php';
require __DIR__.'/Shopping/Invoice.php';


use App\CompositionVsInheritance\Shopping\Invoice;

$invoice = new Invoice(
   new \App\CompositionVsInheritance\Shopping\SalesTaxCalculator()
);

$invoice->create([
     ['description' => 'Item 1', 'quantity' => 1, 'unitPrice' => 15.25],
     ['description' => 'Item 2', 'quantity' => 2, 'unitPrice' => 2],
     ['description' => 'Item 3', 'quantity' => 3, 'unitPrice' => 0.25]
]);