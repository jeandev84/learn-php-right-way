<?php

namespace App\HTML\Form\Element;

use app\HTML\Form\Contract\Renderable;

abstract class Field implements Renderable
{

    public function __construct(protected string $name)
    {
    }
}