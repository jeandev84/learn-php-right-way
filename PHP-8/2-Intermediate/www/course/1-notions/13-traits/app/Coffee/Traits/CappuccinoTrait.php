<?php

namespace App\Coffee\Traits;

trait CappuccinoTrait
{
    public function makeCappuccino(): void
    {
        echo static::class . ' is making cappuccino', PHP_EOL;
    }
}