<?php
use App\SerializeObject\Invoice;

require_once __DIR__.'/../vendor/autoload.php';

/*
echo serialize(true) . PHP_EOL;
echo serialize(1) . PHP_EOL;
echo serialize(2.5) . PHP_EOL;
echo serialize('hello world') . PHP_EOL;
echo serialize([1,2,3]) . PHP_EOL;
echo serialize(['a' => 1, 'b' => 2]) . PHP_EOL;

$serializedAssoc = serialize(['a' => 1, 'b' => 2]);
print_r(unserialize($serializedAssoc));


$invoice = new \App\SerializeObject\InvoiceController();

# echo serialize($invoice). PHP_EOL;
var_dump(unserialize('O:27:"App\SerializeObject\InvoiceController":1:{s:2:"id";s:21:"invoice_657afe17674ec";}'));


$invoice = new \App\SerializeObject\InvoiceController();

$str = serialize($invoice);

$invoice2 = unserialize($str);

var_dump($invoice, $invoice2, $invoice === $invoice2);
*/


$invoice  = new Invoice(25, 'InvoiceController 1', '123456789123456');

$str      = serialize($invoice);
$invoice2 = unserialize($str);

// echo $str . PHP_EOL;
var_dump($invoice2);





