<?php

namespace App\Coffee\Makers;

use App\Traits\Coffee\Makers\CoffeeMaker;
use App\Traits\Coffee\Traits\CappuccinoTrait;
use App\Traits\Coffee\Traits\LatteTrait;

class AllInOneCoffeeMaker extends CoffeeMaker
{
      use LatteTrait, CappuccinoTrait;
}