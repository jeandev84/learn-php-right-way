<?php
namespace App\PaymentGateway\Paddle;

use App\StaticMethodsProperties\Enums\Status;

class Transaction
{

     private string $status;


     public function __construct()
     {
         $this->setStatus(Status::PENDING);
     }


     public function setStatus(string $status): self
     {
         if (! isset(Status::ALL_STATUSES[$status])) {
              throw new \InvalidArgumentException('Invalid status');
         }

         $this->status = $status;

         return $this;
     }
}

