<?php
declare(strict_types=1);

namespace Framework\Validation\Contracts;

use App\DTO\EmailValidationResult;

interface EmailValidationInterface
{

     /**
      * @param string $email
      *
      * @return EmailValidationResult
     */
     public function verify(string $email): EmailValidationResult;
}