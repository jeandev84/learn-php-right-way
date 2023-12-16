<?php

use App\PHP_8_1\Examples\Enum\PaymentStatus;

$payment = new \App\PHP_8_1\Examples\Enum\Payment();

$payment->updateStatus(PaymentStatus::PAID);

echo $payment->status()->name . PHP_EOL;
echo $payment->status()->text() . PHP_EOL;

var_dump(PaymentStatus::PAID);