<?php

namespace App\Traits\Coffee\Makers;

use App\Traits\Coffee\Traits\CappuccinoTrait;

class CappuccinoMaker extends CoffeeMaker
{
     use CappuccinoTrait;

    /*
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public (give public access)
    }
    */
}