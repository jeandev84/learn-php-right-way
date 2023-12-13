<?php

namespace App\Coffee\Makers;

use App\Coffee\Traits\CappuccinoTrait;
use App\Coffee\Traits\LatteTrait;

class AllInOneCoffeeMaker extends CoffeeMaker
{
      use LatteTrait, CappuccinoTrait;
}