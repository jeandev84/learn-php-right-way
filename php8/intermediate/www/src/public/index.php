<?php
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__.'/../vendor/autoload.php';

/*
$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');
$transaction = new Transaction(25, 'Transaction 1');

echo 'Class called : '. Transaction::getCount()) . ' times.; # 5
*/


$transaction = new Transaction(25, 'Transaction 1');

$db = \App\DB::getInstance([]);
$db = \App\DB::getInstance([]);
$db = \App\DB::getInstance([]);
$db = \App\DB::getInstance([]);
$db = \App\DB::getInstance([]);
$db = \App\DB::getInstance([]);

