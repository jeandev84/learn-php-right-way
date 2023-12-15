<?php

namespace App\Coffee\Makers;

use App\Traits\Coffee\Makers\CoffeeMaker;
use App\Traits\Coffee\Traits\LatteTrait;

class LatteMaker extends CoffeeMaker
{
   use LatteTrait;
}