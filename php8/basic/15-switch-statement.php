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


$paymentStatus = 1;

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


function x(): int {
    sleep(3);
    echo 'Done <br>';
    return 1;
}


if (x() === 1) {
    echo 1;
} elseif (x() === 2) {
    echo 2;
} elseif (x() === 3) {
    echo 3;
} else {
    echo 4;
}