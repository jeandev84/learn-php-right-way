<?php

$paymentStatus = 'paid';

switch ($paymentStatus):
    case 'paid':
        echo 'Paid';
        break;

    case 'declined':
        echo 'Payment Declined';
        break;

    case 'pending':
        echo 'Pending Declined';
        break;

    default:
        echo 'Unknown Payment Status';
endswitch;