<?php

namespace App\Traits\Coffee\Traits;

trait CappuccinoTrait
{
    public function makeCappuccino(): void
    {
        echo static::class . ' is making cappuccino', PHP_EOL;
    }
}