<?php
declare(strict_types=1);

namespace App\Services\Payment\Contract;

interface PaymentGatewayInterface
{

    /**
     * @param array $customer
     * @param float $amount
     * @param float $tax
     * @return bool
    */
    public function charge(array $customer, float $amount, float $tax): bool;
}