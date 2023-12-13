<?php
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__.'/../vendor/autoload.php';

$transaction = new Transaction(25);

$reflectionProperty = new ReflectionProperty($transaction, 'amount');
$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($transaction, 125);

dump($reflectionProperty->getValue($transaction));

$transaction->process();


