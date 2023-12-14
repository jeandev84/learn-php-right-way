<?php

namespace App\Coffee\Makers;

use App\Coffee\Traits\CappuccinoTrait;

class CappuccinoMaker extends CoffeeMaker
{
     use CappuccinoTrait;

    /*
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public (give public access)
    }
    */
}