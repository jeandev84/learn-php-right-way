<?php

// Classes & Objects
require_once '../Transaction.php';
$amount = (new Transaction(100, 'Transaction 1'))
          ->addTax(8)
          ->applyDiscount(10)
          ->getAmount();

echo $amount;
