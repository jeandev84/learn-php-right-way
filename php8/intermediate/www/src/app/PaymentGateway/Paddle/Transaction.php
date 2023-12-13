<?php
namespace App\PaymentGateway\Paddle;


class Transaction
{

    private static int $count = 0;


    public function __construct(
        public float  $amount,
        public string $description
    )
    {
         self::$count++;
    }


    /**
     * @return int
    */
    public static function getCount(): int
    {
        return self::$count;
    }

    public function process(): void
    {
         echo 'Processing paddle transaction...';
    }
}

