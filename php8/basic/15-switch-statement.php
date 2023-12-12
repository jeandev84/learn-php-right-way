<?php

/*
$paymentStatus = 'paid';

switch ($paymentStatus):
    case 'paid':
        echo 'Paid';
        break;

    case 'declined':
    case 'rejected':
        echo 'Payment Declined';
        break;

    case 'pending':
        echo 'Pending Declined';
        break;

    default:
        echo 'Unknown Payment Status';
endswitch;
*/


$paymentStatuses = [1, 3, 0];

foreach ($paymentStatuses as $paymentStatus) {
    switch ($paymentStatus):
        case 1:
            echo 'Paid';
            break;
            #break 2;
            #continue 2;
        case 2:
        case 3:
            echo 'Payment Declined';
        break;
        default:
            echo 'Unknown Payment Status';
    endswitch;
}