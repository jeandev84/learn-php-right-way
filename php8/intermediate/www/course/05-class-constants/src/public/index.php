<?php
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__.'/../vendor/autoload.php';

$transaction = new Transaction();
// echo Transaction::class;

$transaction->setStatus(\App\Enums\Status::PAID);

dump($transaction);


