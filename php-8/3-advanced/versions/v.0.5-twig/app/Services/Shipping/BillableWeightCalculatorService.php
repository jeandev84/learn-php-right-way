<?php
declare(strict_types=1);

namespace App\Services\Shipping;

use App\Services\Shipping\ValueObject\Package\DimDivisor;
use App\Services\Shipping\ValueObject\Package\PackageDimension;
use App\Services\Shipping\ValueObject\Package\Weight;

class BillableWeightCalculatorService
{
      public function calculate(
          PackageDimension $packageDimension,
          Weight $weight,
          DimDivisor $dimDivisor
      ): int
      {
          $dimWeight = (int) round(
          $packageDimension->width * $packageDimension->height * $packageDimension->length / $dimDivisor->value
          );

          return max($weight->value, $dimWeight);
      }
}