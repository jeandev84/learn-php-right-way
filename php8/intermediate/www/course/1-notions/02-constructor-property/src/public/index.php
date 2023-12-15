<?php

// Classes & Objects
require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';

$transaction = new Transaction(5, 'test');

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';


