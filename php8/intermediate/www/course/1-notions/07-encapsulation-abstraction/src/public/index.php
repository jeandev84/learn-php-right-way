<?php

use App\StaticMethodsProperties\PaymentGateway\Paddle\Transaction;

require_once __DIR__.'/../vendor/autoload.php';

/*
$transaction = new Transaction(25);

$reflectionProperty = new ReflectionProperty($transaction, 'amount');
$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($transaction, 125);

dump($reflectionProperty->getValue($transaction));

$transaction->process();
*/

$transaction = new Transaction(25);

$transaction->copyFrom(new Transaction(100));
# $transaction->process();


