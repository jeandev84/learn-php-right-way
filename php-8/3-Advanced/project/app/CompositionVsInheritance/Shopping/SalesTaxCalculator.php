<?php

namespace App\CompositionVsInheritance\Shopping;

class SalesTaxCalculator
{

    /**
     * @param float|int $total
     *
     * @return float
    */
    public function calculate(float|int $total): float
    {
        return round($total * 7 / 100, 2);
    }
}