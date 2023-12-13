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

if (! file_exists('foo.txt')) {
    touch('foo.txt');
}

echo filesize('too.txt');
file_put_contents('foo.txt', 'hello world');