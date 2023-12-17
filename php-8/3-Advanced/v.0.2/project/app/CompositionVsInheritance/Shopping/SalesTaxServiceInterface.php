<?php

namespace App\CompositionVsInheritance\Shopping;

interface SalesTaxServiceInterface
{
    public function calculate(float|int $total): float;
}