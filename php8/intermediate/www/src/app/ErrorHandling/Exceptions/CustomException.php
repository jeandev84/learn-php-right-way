<?php

namespace App\ErrorHandling\Exceptions;

class CustomException extends \Exception
{

     public static function missingBillingInfo()
     {
         return new static("Missing billing info...");
     }
}