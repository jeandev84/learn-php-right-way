<?php

namespace App\Collector;

interface DebtCollector
{
       public function collect(float $owedAmount): float;
}