<?php
declare(strict_types=1);

namespace App\Services\Shipping\ValueObject\Package;

enum DimDivisor: int
{
      case FEDEX = 139;
}