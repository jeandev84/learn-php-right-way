<?php

require_once __DIR__.'/../vendor/autoload.php';

$invoice = new \App\Cloning\Invoice();

/*
$invoice2 = $invoice;
var_dump($invoice, $invoice2, \App\Cloning\Invoice::create());
var_dump($invoice, $invoice2, $invoice === $invoice2);
*/

$invoice2 = clone $invoice;
var_dump($invoice, $invoice2, $invoice === $invoice2);
