<?php

class Customer
{
      private ?PaymentProfile $paymentProfile = null;


      /**
       * @return PaymentProfile|null
      */
      public function getPaymentProfile(): ?PaymentProfile
      {
          return $this->paymentProfile;
      }


      /**
       * @param PaymentProfile|null $paymentProfile
       *
       * @return $this
      */
      public function setPaymentProfile(?PaymentProfile $paymentProfile): self
      {
          $this->paymentProfile = $paymentProfile;

          return $this;
      }
}