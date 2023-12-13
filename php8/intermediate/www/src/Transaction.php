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
      private ?float $amount;
      private ?string $description;


      /**
       * @param float $amount
       * @param string $description
      */
      public function __construct(float $amount, string $description)
      {
          $this->amount = $amount;
          $this->description = $description;
      }


      /**
       * @return float|null
      */
      public function getAmount(): ?float
      {
          return $this->amount;
      }


      /**
       * @return string|null
      */
      public function getDescription(): ?string
      {
          return $this->description;
      }


      /**
       * @param float $rate
       * @return $this
      */
      public function addTax(float $rate): self
      {
          $this->amount += $this->amount * $rate / 100;

          return $this;
      }


      /**
       * @param float $rate
       * @return $this
      */
      public function applyDiscount(float $rate): self
      {
           $this->amount -= $this->amount * $rate / 100;

           return $this;
      }
}