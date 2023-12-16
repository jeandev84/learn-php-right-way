<?php

namespace App\PHP_8_1\Examples\ReadOnlyProperty;

class Address
{
    public function __construct(
        public readonly string $street,
        public readonly string $city,
        public readonly string $state,
        public readonly string $postalCode,
        public readonly string $country
    )
    {

    }
}