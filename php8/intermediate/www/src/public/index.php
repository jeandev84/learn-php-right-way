<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

dd($paddleTransaction);




