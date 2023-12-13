<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../Notification/Email.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/Transaction.php';

# var_dump(new \PaymentGateway\Paddle\Transaction());

use app\PaymentGateway\Paddle\{CustomerProfile};
use app\PaymentGateway\Paddle\Transaction;
use app\PaymentGateway\Stripe\Transaction as StripeTransaction;


$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleCustomerProfile, $paddleTransaction, $stripeTransaction);



