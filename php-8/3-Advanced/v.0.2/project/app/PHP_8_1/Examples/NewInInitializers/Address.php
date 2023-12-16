<?php

namespace App\PHP_8_1\Examples\NewInInitializers;

class Address
{
    public function __construct()
    {
        var_dump('Hello');
    }
}