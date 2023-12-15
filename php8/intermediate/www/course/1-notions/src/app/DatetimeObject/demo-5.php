<?php

/*
# P  : Period,
# 2D : two days
# 3M : three months

$datetime1 = new DateTime('05/25/2021 9:15 AM');
$datetime2 = new DateTime('03/15/2021 3:25 AM');
$interval  = new DateInterval('P2D');
var_dump($interval);

$datetime1 = new DateTime('05/25/2021 9:15 AM');
$datetime2 = new DateTime('03/15/2021 3:25 AM');
$interval  = new DateInterval('P3M2D');
var_dump($interval);

$datetime = new DateTime('05/25/2021 9:15 AM');
$interval = new DateInterval('P3M2D');
$datetime->add($interval);
echo $datetime->format('m/d/Y g:iA') . PHP_EOL;
$datetime->sub($interval);
echo $datetime->format('m/d/Y g:iA') . PHP_EOL;

$datetime = new DateTime('05/25/2021 9:15 AM');
$interval = new DateInterval('P3M2D');

$interval->invert = 1;
$datetime->add($interval);
echo $datetime->format('m/d/Y g:iA') . PHP_EOL;

$datetime->sub($interval);
echo $datetime->format('m/d/Y g:iA') . PHP_EOL;

02/23/2021 9:15AM
05/25/2021 9:15AM

After invert = 1

08/27/2021 9:15AM
05/25/2021 9:15AM
*/