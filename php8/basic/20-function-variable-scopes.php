<?php

/** Variable scopes */

$x = 5;

function foo(): void {
    global $func;
    $func = 10;
    echo $func;
}

foo();
echo $x;


function func(): void {
    $GLOBALS['func'] = 10;
    echo $GLOBALS['func'];
}

foo();
echo $x;

$x = 5;


function getValue(): string {
    static $value = null;
    if ($value === null) {
        $value = someVeryExpensiveFunction();
    }
    return $value;
}


function someVeryExpensiveFunction(): string {
    sleep(2);
    echo 'Processing';
    return 10;
}

echo getValue(), "<br/>";