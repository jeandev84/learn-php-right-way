<?php

namespace App\Inheritance\HTML\Form\Element;

use App\Inheritance\HTML\Form\Contract\Renderable;

abstract class Field implements Renderable
{

    public function __construct(protected string $name)
    {
    }
}