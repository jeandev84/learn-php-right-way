<?php

namespace App\CompositionVsInheritance\Shopping;

use App\CompositionVsInheritance\Shopping\Service\TaxJarSalesTaxService;

class SalesTaxCalculator
{

    public function __construct(protected SalesTaxServiceInterface $api)
    {
    }

    /**
     * @param float|int $total
     *
     * @return float
    */
    public function calculate(float|int $total): float
    {
        return $this->api->calculate($total);
    }
}