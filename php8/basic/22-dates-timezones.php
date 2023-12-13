<?php

/* Date & Time */
// 5 days in seconds = 5 * 24 * 60 * 60

$currentTime = time();
echo $currentTime, '<br/>';
echo $currentTime + 5 * 24 * 60 * 60, '<br/>';
echo $currentTime - 60 * 60 * 24, '<br/>';

echo date('m/d/Y g:ia');
echo date('m/d/Y g:ia',  $currentTime + 5 * 24 * 60 * 60);
echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24);

// Current timezone
echo date_default_timezone_get();

// Set Timezone
date_default_timezone_set('UTC');

echo date('m/d/Y g:ia');
echo date('m/d/Y g:ia',  $currentTime + 5 * 24 * 60 * 60);
echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24);


date_default_timezone_set('Europe/Moscow');

echo date('m/d/Y g:ia');
echo date('m/d/Y g:ia',  $currentTime + 5 * 24 * 60 * 60);
echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24);


// Make time and format
$time = mktime(0, 0, 0, 4, 10, null);
echo date('m/d/Y g:ia', $time);


$format = strtotime('2021-01-18 07:00:00');
echo date('m/d/Y g:ia', strtotime($format));

echo date('m/d/Y g:ia', strtotime('tomorrow'));
echo date('m/d/Y g:ia', strtotime('first day of february'));
echo date('m/d/Y g:ia', strtotime('last day of february'));
echo date('m/d/Y g:ia', strtotime('last day of february 2020'));
echo date('m/d/Y g:ia', strtotime('second friday of January'));


$date = date('m/d/Y g:ia', strtotime('second friday of January'));

echo '<pre>';
print_r(date_parse($date));
echo '</pre>';

echo '<pre>';
print_r(date_parse_from_format('m/d/Y g:ia', $date));
echo '</pre>';