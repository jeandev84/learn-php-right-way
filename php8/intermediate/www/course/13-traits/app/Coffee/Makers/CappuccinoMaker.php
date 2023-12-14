<?php

namespace App\Coffee\Makers;

use App\Traits\Coffee\Makers\CoffeeMaker;
use App\Traits\Coffee\Traits\CappuccinoTrait;

class CappuccinoMaker extends CoffeeMaker
{
     use CappuccinoTrait;
}