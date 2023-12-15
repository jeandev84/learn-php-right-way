<?php
declare(strict_types=1);


/**
 * Class Transaction
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package
*/
class Transaction
{

      private ?Customer $customer = null;


      /**
       * @param float $amount
       * @param string $description
      */
      public function __construct(
          private float $amount,
          private string $description
      )
      {
      }


      /**
       * @return Customer|null
      */
      public function getCustomer(): ?Customer
      {
          return $this->customer;
      }
}
