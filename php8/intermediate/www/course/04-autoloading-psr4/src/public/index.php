<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\StaticMethodsProperties\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();


dump($paddleTransaction);



