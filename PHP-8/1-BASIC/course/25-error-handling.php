<?php

// Error Handling
/*
// https://www.php.net/manual/en/errorfunc.constants.php
error_reporting(E_ALL);
error_reporting(E_ALL & ~E_WARNING);


trigger_error('Example error', E_USER_ERROR);

echo 1;
*/

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line = null
) {
    echo "$type: $msg in $file on line $line";
    return;
}


error_reporting(E_ALL & ~E_WARNING);
set_error_handler('errorHandler', E_ALL);

echo $x;