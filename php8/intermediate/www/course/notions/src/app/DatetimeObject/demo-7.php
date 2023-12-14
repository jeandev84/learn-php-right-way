<?php

/*
$startDate = new DateTime('05/01/2021');
$endDate   = new DateTime('05/31/2021');
$intervalOneDay  = new DateInterval('P1D');

$period = new DatePeriod($startDate, $intervalOneDay, $endDate);

foreach ($period as $date) {
    echo $date->format('m/d/Y'). PHP_EOL;
}


$startDate = new DateTime('05/01/2021');
$endDate   = new DateTime('05/31/2021');
$intervalOneDay  = new DateInterval('P1D');

$period = new DatePeriod($startDate, $intervalOneDay, $endDate->modify('+1 day'));

foreach ($period as $date) {
    echo $date->format('m/d/Y'). PHP_EOL;
}


$startDate = new DateTime('05/01/2021');
$endDate   = new DateTime('05/31/2021');
$intervalThreeDay  = new DateInterval('P3D');

$period = new DatePeriod($startDate, $intervalThreeDay, $endDate->modify('+1 day'));

foreach ($period as $date) {
    echo $date->format('m/d/Y'). PHP_EOL;
}


$period = new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P3D'), 3);
foreach ($period as $date) {
    echo $date->format('m/d/Y'). PHP_EOL;
}
*/

$period = new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P3D'), 3, DatePeriod::EXCLUDE_START_DATE);

foreach ($period as $date) {
    echo $date->format('m/d/Y'). PHP_EOL;
}