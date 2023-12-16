<?php

namespace App\PHP_8_1\Examples\Enum;

class Payment
{
    private PaymentStatus $status;


    public function updateStatus(PaymentStatus $status): static
    {
        $this->status = $status;

        return $this;
    }


    /**
     * @return PaymentStatus
    */
    public function status(): PaymentStatus
    {
        return $this->status;
    }
}