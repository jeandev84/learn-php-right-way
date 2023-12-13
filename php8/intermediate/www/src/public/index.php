<?php

require_once __DIR__.'/../vendor/autoload.php';


$invoice = new \App\Invoice\Invoice(15);

$invoice();

echo $invoice;