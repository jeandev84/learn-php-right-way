<?php

# https://carbon.nesbot.com/docs
/*
$timezoneId = 'Asia/Yekaterinburg';
$timezoneId = 'Europe/Amsterdam';
$datetime   = new DateTime('now'); // by default datetime is now
$datetime   = new DateTime('tomorrow');
$datetime   = new DateTime('tomorrow 3:35pm');
$datetime   = new DateTime('yesterday noon');
$datetime   = new DateTime('05/12/2021 3:30pm');
# $datetime   = new DateTime('05/12/2021 3:30pm', new DateTimeZone('Europe/Moscow'));

var_dump($datetime);

$datetime->setTimezone(new DateTimeZone('Europe/Moscow'));
$datetime->setTimezone(new DateTimeZone('Europe/Amsterdam'));

var_dump($datetime);
*/

$datetime   = new DateTime('05/12/2021 3:30pm');

// day/month/year  - europe
// month/day/year  - U.S.
echo $datetime->getTimezone()->getName() . ' - '. $datetime->format('m/d/Y g:i A'), PHP_EOL;

# $datetime->setDate(2021, 4, 21)->setTime(2, 15);

$datetime->setTimezone(new DateTimeZone('Europe/Amsterdam'))
         ->setDate(2021, 4, 21)
         ->setTime(2, 15);

# $datetime->setDate(2021, 4, 21)->setTime(2, 15);

echo $datetime->getTimezone()->getName() . ' - '. $datetime->format('m/d/Y g:i A'), PHP_EOL;