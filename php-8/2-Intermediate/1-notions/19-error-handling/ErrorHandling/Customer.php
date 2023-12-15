<?php

namespace App\ErrorHandling;

class Customer
{
     public function __construct(private array $billingInfo = [])
     {
     }


     /**
      * @return array
     */
     public function getBillingInfo(): array
     {
         return $this->billingInfo;
     }
}