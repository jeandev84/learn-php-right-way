<?php

namespace App\ErrorHandling\Exceptions;

class MissingBillingInfoException extends \Exception
{
         protected $message = 'Missing billing information';
}