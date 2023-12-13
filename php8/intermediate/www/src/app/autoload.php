<?php

/*
spl_autoload_register(function ($classname) {
    echo "Autoloader 1";
});

spl_autoload_register(function ($classname) {
   echo "Autoloader 2";
}, prepend: true); Autoloader 2 will be called before Autoloader 1, because prepend flag = true
*/

spl_autoload_register(function ($classname) {
    $path = dirname(__DIR__).'/'. lcfirst(str_replace('\\', '/', $classname)). '.php';
    require_once $path;
});