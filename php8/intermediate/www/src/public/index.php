<?php
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__.'/../vendor/autoload.php';

$transaction = new Transaction(25);

$transaction->setAmount(125);
$transaction->process();


