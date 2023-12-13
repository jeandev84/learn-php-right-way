<?php

// ARRAYS

/*
$programmingLanguages = ['PHP', 'Java', 'Python'];
echo $programmingLanguages[0], $programmingLanguages[2];
var_dump(isset($programmingLanguages[3]));

$programmingLanguages[1] = 'C++';
echo $programmingLanguages[1];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

array_push($programmingLanguages, 'C++', 'C', 'GO');
# $programmingLanguages[] = 'C++';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);

========================================================
$programmingLanguages = [
    'php'    => '8.0',
    'python' => '3.9'
];

echo $programmingLanguages['php'];
$programmingLanguages['go'] = '1.15';

$newLanguage = 'java';
$programmingLanguages[$newLanguage] = '0.18';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
*/

$programmingLanguages = [
    'php'    => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'include-files.php.net',
        'isOpensource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ]
    ],
    'python' =>  [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'include-files.python.org',
        'isOpensource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ]
    ],
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php']['website'];
print_r($programmingLanguages['php']['versions']);
echo $programmingLanguages['php']['versions'][0]['releaseDate'];

$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];
print_r($array);
echo $array[null];
echo array_shift($array);
print_r($array);


$mixed = ['a', 'b', 50 => 'c', 'd', 'e'];
unset($mixed[50], $mixed[1]);
print_r($mixed);

$numbers = [1, 2, 3];
unset($numbers[0], $numbers[1], $numbers[2]);
$numbers[] = 1;
print_r($numbers);

$a = 5;
$b = 'something';
$c = null;
var_dump((array)$a, (array)$b, (array)$c);

$array = ['a' => 1, 'b' => null];
var_dump(array_key_exists('a', $array));
var_dump(isset($array['a']));

