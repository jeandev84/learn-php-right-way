<?php



/*
$datetime1 = new DateTime('05/25/2021 9:15 AM');
$datetime2 = new DateTime('05/25/2021 3:25 AM');

$dateInterval = $datetime1->diff($datetime2);

var_dump($dateInterval);
*/


$datetime1 = new DateTime('05/25/2021 9:15 AM');
$datetime2 = new DateTime('03/15/2021 3:25 AM');

$dateInterval1 = $datetime1->diff($datetime2);
$dateInterval2  = $datetime2->diff($datetime1);

# var_dump($dateInterval1, $dateInterval2);
# echo $datetime2->diff($datetime1)->days;
echo $datetime2->diff($datetime1)->format('%Y years, %m months, %d days, %H, %i, %s') . PHP_EOL;
echo $datetime2->diff($datetime1)->format('%a') . PHP_EOL; // total days
echo $datetime2->diff($datetime1)->format('%R%a') . PHP_EOL; // positive total days
echo $datetime1->diff($datetime2)->format('%R%a') . PHP_EOL; // negative total days