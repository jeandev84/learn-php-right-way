<?php

/* MATCH EXPRESSION */

$paymentStatus = 1;

// switch compare with ==
switch ($paymentStatus):
    case 1:
        echo 'Paid';
        break;

    case 2:
    case 3:
        echo 'Payment Declined';
        break;

    case 0:
        echo 'Pending Declined';
        break;

    default:
        echo 'Unknown Payment Status';
endswitch;

echo '<hr/>';


// match compare with ===
$paymentStatusDisplay = match ($paymentStatus) {
   1 => 'Paid',
   #(1 > 2) => 'Condition (1 > 2)',
   2,3 => 'Payment Declined',
   0 => 'Pending Payment',
   default => 'Unknown Payment Status'
};

echo $paymentStatusDisplay;