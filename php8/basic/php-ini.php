<?php

/* php.ini & configuration */
/* https://www.php.net/manual/en/ini.list.php */
/*
ini_get();
ini_set();
*/
// error_reporting, error_log, display_errors
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);
var_dump(E_DEPRECATED);

ini_set('error_reporting', 0);
ini_set('error_reporting', E_ALL && ~E_WARNING);


var_dump(ini_get('display_errors'));
ini_set('display_errors', 0);
ini_set('display_errors', 1);




