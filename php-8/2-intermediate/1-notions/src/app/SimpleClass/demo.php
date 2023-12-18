<?php

// Classes & Objects
require_once '../Transaction.php';
$transaction = (new Transaction(100, 'Transaction 1'))
                ->addTax(8)
                ->applyDiscount(10);

$amount = $transaction->getAmount();

$transaction = null;

var_dump($amount);
