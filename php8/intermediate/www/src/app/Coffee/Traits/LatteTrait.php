<?php

namespace App\Coffee\Traits;

trait LatteTrait
{
    public function makeLatte(): void
    {
        echo static::class . ' is making latte', PHP_EOL;
    }
}