<?php

namespace Framework\Templating\Exceptions;

class ViewNotFoundException extends \Exception
{
     public function __construct()
     {
         parent::__construct("View not found", 404);
     }
}