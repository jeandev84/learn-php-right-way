<?php

namespace App\Coffee\Makers;

use App\Coffee\Traits\CappuccinoTrait;
use App\Coffee\Traits\LatteTrait;

class AllInOneCoffeeMaker extends CoffeeMaker
{
      use CappuccinoTrait;
      use LatteTrait;
      /*
      use CappuccinoTrait {
          CappuccinoTrait::makeLatte insteadof LatteTrait
      }
      use LatteTrait {
          CappuccinoTrait::makeLatte as makeOriginalLatte
      }
      */
}