<?php


/*
$date = '12/05/2021 3:30pm';
$datetime = new DateTime();
var_dump($datetime);

$date = '15/05/2021 3:30pm';
$datetime = new DateTime(str_replace('/', '.', $date));
var_dump($datetime);

$date = '15/05/2021 3:30pm';
$datetime = DateTime::createFromFormat('d/m/Y g:iA', $date);
var_dump($datetime);
*/

$date = '15/05/2021';
$datetime = DateTime::createFromFormat('d/m/Y', $date)->setTime(0, 0);
var_dump($datetime, new DateTime('15-05-2021'));