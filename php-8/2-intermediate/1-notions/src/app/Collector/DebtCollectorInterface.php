<?php

namespace App\Collector;

interface DebtCollectorInterface
{
       public function collect(float $owedAmount): float;
}