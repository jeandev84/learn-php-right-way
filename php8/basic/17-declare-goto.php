<?php
declare(strict_types=1);
/** return / declare / goto */

/*
function sum(int $x, int $y): int {
    return $x + $y;
}

$x = sum(5, 10);
echo $x;

echo '<br/>';
echo 'Hello World';
*/

// declare - ticks
/*
$x = 3;
$y = 5;
$z = $x*$y;
*/

function onTick(): void {
    echo 'Tick<br/>';
}

register_tick_function('onTick');

declare(ticks=1);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br />';
}




// declare - encoding


// declare - strict_types

