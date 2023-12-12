<?php

/* STRINGS */

/*
$firstName = 'Will';
$lastName  = "Smith";

echo "$firstName $lastName";
echo "${firstName} ${lastName}";
echo "{$firstName} {$lastName}";

$name = $firstName . ' '. $lastName;
echo $name . '<br/>';
echo $name[0];
echo $name[1];
echo $name[-2];

$name[-2] = 'I';
$name[15] = 'I';
echo $name;
*/


$x = 1; $y = 2;

// Heredoc
$text = <<<TEXT
Line1 $x 
Line2 $y
Line3
TEXT;

echo nl2br($text);

// Nowdoc
$text = <<<'TEXT'
Line1 $x 
Line2 $y
Line3
TEXT;

echo '<br>';
echo nl2br($text);


