<?php

/** LOOPS */

// while
$i = 0;
while (true) {
    if ($i >= 15) {
        break;
    }
    if ($i % 2 === 0) {
        $i++;
        continue;
    }
    echo $i++. ',';
}

// do-while
$i = 0;
do {
    echo $i++;
} while ($i <= 15);


// for
for ($i = 0; $i < 15; $i++) {
    echo $i;
}

for ($i = 0; $i < 15; print $i, $i++) {
    echo $i;
}

for ($i = 0; print $i, $i < 15; $i++) {
    echo $i;
}

$text = ['a', 'b', 'c', 'd'];
for ($i = 0; $i < count($text); $i++) {
    echo $text[$i] . '<br/>';
}

for ($i = 0, $length = count($text); $i < $length; $i++) {
    echo $text[$i] . '<br/>';
}

$length = count($text);
for ($i = 0; $i < $length; $i++) {
    echo $text[$i] . '<br/>';
}
// foreach
