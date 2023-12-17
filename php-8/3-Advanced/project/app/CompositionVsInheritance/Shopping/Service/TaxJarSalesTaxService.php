<?php

namespace App\CompositionVsInheritance\Shopping\Service;

use App\CompositionVsInheritance\Shopping\SalesTaxServiceInterface;

class TaxJarSalesTaxService implements SalesTaxServiceInterface
{
      public function calculate(float|int $total): float
      {
          return round($total * 7 / 100, 2);
      }
}