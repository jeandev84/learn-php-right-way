<?php

namespace App\ErrorHandling\Exceptions;

class CustomException extends \Exception
{

     public static function missingBillingInfo(): MissingBillingInfoException
     {
         return new MissingBillingInfoException("Missing billing info...");
     }
}