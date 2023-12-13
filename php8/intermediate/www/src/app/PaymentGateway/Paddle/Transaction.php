<?php
namespace App\PaymentGateway\Paddle;


class Transaction
{

    private float $amount;


    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }


    /**
     * @param float $amount
     *
     * @return $this
    */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }



    /**
     * @return float
    */
    public function getAmount(): float
    {
        return $this->amount;
    }



    public function process(): void
    {
         echo 'Processing $'. $this->amount . ' transaction';
    }
}

