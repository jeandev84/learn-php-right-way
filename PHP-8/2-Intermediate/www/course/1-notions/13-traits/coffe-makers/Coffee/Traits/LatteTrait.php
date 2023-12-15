<?php

namespace App\Coffee\Traits;

trait LatteTrait
{

    private string $milkType = 'whole-milk';


    public function makeLatte(): void
    {
        echo static::class . ' is making latte with ', $this->getMilkType(), PHP_EOL;
    }


    public function setMilkType(string $milkType): static
    {
        $this->milkType = $milkType;

        return $this;
    }



    /**
     * @return string
    */
    public function getMilkType(): string
    {
        return $this->milkType;
    }
}