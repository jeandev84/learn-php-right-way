<?php
namespace App\PaymentGateway\Paddle;


class Transaction
{

    private float $amount;


    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }



    public function process(): void
    {
         echo 'Processing $'. $this->amount . ' transaction';
         $this->generateReceipt();
         $this->sendEmail();
    }



    private  function generateReceipt()
    {

    }



    private function sendEmail()
    {

    }
}

