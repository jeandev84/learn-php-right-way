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