<?php

namespace Framework\Routing\Exceptions;

class RouteNotfoundException extends \Exception
{
     public function __construct()
     {
         parent::__construct("404 Not found", 404);
     }
}