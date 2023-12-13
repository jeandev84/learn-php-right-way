<?php

namespace App\StaticBindings;

class ClassA
{
    protected static string $name = 'A';

    /**
     * @return string
    */
    public static function getName(): string
    {
        dump(get_called_class());
        return static::$name;
    }



    public static function make(): static
    {
        return new static();
    }
}