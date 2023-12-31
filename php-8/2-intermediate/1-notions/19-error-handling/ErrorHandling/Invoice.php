<?php

namespace App\ErrorHandling;

use App\ErrorHandling\Exceptions\CustomException;
use App\ErrorHandling\Exceptions\InvoiceException;
use App\ErrorHandling\Exceptions\MissingBillingInfoException;

class Invoice
{

     public function __construct(public Customer $customer)
     {
     }


     public function process(float $amount): void
     {
          if ($amount <= 0) {
              # throw new \InvalidArgumentException('Invalid invoice amount');
              throw InvoiceException::invalidAmount();
          }

          if (empty($this->customer->getBillingInfo())) {
              # throw new MissingBillingInfoException();
              # throw CustomException::missingBillingInfo();
              throw InvoiceException::missingBillingInfo();
          }

          echo 'Processing $'. $amount . ' invoice - ';

          sleep(1);

          echo 'OK'. PHP_EOL;
     }
}