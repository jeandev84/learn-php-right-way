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
        'website' => 'www.php.net',
        'isOpensource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ]
    ],
    'python' =>  [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
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

