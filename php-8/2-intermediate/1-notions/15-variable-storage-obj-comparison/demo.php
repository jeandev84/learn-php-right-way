<?php


/*
$invoice1 = new \App\ObjectComparison\InvoiceController(25, 'My InvoiceController');
$invoice2 = new \App\ObjectComparison\InvoiceController(25, 'My InvoiceController');

echo 'invoice1 == invoice2'. PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2'. PHP_EOL;
var_dump($invoice1 === $invoice2);

$invoice3 = $invoice1;

echo 'invoice1 == invoice3'. PHP_EOL;
var_dump($invoice1 == $invoice3);

$invoice3->amount = 250;

echo 'invoice1 === invoice3'. PHP_EOL;
var_dump($invoice1 === $invoice3);


$invoice1 = new \App\ObjectComparison\InvoiceController(25, 'My InvoiceController');
$invoice2 = new \App\ObjectComparison\CustomInvoice(25, 'My InvoiceController');


echo 'invoice1 == invoice2'. PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2'. PHP_EOL;
var_dump($invoice1 === $invoice2);

var_dump($invoice1, $invoice2);
*/



$invoice1 = new \App\ObjectComparison\Invoice(new \App\ObjectComparison\Customer('Customer 1'), 25, 'My InvoiceController');
$invoice2 = new \App\ObjectComparison\Invoice(new \App\ObjectComparison\Customer('Customer 1'), 25, 'My InvoiceController');

/*
$invoice1->linkedInvoice = $invoice2;
$invoice2->linkedInvoice = $invoice1;
*/

echo 'invoice1 == invoice2'. PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2'. PHP_EOL;
var_dump($invoice1 === $invoice2);

var_dump($invoice1, $invoice2);