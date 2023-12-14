<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../Notification/Email.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/Transaction.php';

# var_dump(new \PaymentGateway\Paddle\Transaction());

use App\StaticMethodsProperties\PaymentGateway\Paddle\{CustomerProfile};
use App\StaticMethodsProperties\PaymentGateway\Paddle\Transaction;
use App\StaticMethodsProperties\PaymentGateway\Stripe\Transaction as StripeTransaction;


$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleCustomerProfile, $paddleTransaction, $stripeTransaction);




