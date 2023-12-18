<?php
declare(strict_types=1);

namespace Framework\Validation\Contracts;

interface EmailValidationInterface
{

     /**
      * @param string $email
      *
      * @return array
     */
     public function verify(string $email): array;
}