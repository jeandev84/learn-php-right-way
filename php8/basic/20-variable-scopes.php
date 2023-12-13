<?php

/** Variable scopes */

$x = 5;

function foo(): void {
    global $x;
    $x = 10;
    echo $x;
}

foo();
echo $x;


function func(): void {
    $GLOBALS['x'] = 10;
    echo $GLOBALS['x'];
}

foo();
echo $x;