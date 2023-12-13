<?php

// Working with filesystem
/*
$dir = scandir(__DIR__);
var_dump($dir);
mkdir('foo', 0777, true);
rmdir('foo');
mkdir('foo/bar', recursive: true);
rmdir('foo/bar');
*/


// Cache
/*
if (! file_exists('foo.txt')) {
    touch('foo.txt');
}

echo filesize('foo.txt');
file_put_contents('foo.txt', 'hello world');

clearstatcache();
echo filesize('too.txt');
*/


function writeTo(string $filename, string $content): void {
    if (! file_exists($filename)) {
        touch($filename);
    }

    echo filesize($filename);
    file_put_contents($filename, $content);
    clearstatcache();
    echo filesize($filename);
}


// Open file
function read(string $filename): void {
    if (! file_exists($filename)) {
        echo 'File not found';
        return;
    }

    $file = fopen($filename, 'r');

    while (($line = fgets($file)) !== false) {
        echo ($line). '<br/>';
    }

    fclose($file);
}

/* writeTo(__DIR__.'/data/file.txt', 'hello world'); */


function readCsv(string $filename, string $mode = 'r'): void {
    if (! file_exists($filename)) {
        echo 'File not found';
        return;
    }

    $file = fopen($filename, $mode);

    while (($line = fgetcsv($file)) !== false) {
        print_r($line);
    }

    fclose($file);
}

readCsv(__DIR__.'/data/file.txt');


