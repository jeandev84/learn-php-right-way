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