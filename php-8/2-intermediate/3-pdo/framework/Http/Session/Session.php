<?php

namespace Framework\Http\Session;

class Session
{

}


/*
# $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

# setcookie('userName', 'Brown', time() + 10, '/', '', false, false);
setcookie('userName', 'Brown', [
 'expires' => time() + (24 * 60 * 60),
 'path'    => '/',
 'domain'  => '',
 'secure'  => false,
 'httpOnly' => false
]);
setcookie('userName', 'Brown', time() + (24 * 60 * 60));
return View::make('index', $_GET)->render();
*/