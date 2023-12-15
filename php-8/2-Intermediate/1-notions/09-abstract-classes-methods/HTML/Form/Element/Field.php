<?php

namespace App\HTML\Form\Element;

abstract class Field
{

    public function __construct(protected string $name)
    {
    }

    abstract public function render(): string;
}