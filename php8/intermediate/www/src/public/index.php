<?php

require_once __DIR__.'/../vendor/autoload.php';

$invoice1 = new \App\ObjectComparison\Invoice(25, 'My Invoice');
$invoice2 = new \App\ObjectComparison\Invoice(25, 'My Invoice');

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


$invoice1 = new \App\ObjectComparison\Invoice(25, 'My Invoice');
$invoice2 = new \App\ObjectComparison\CustomInvoice(25, 'My Invoice');


echo 'invoice1 == invoice2'. PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2'. PHP_EOL;
var_dump($invoice1 === $invoice2);

var_dump($invoice1, $invoice2);