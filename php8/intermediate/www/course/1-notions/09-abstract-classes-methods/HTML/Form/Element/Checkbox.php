<?php

namespace App\HTML\Form\Element;

use App\Inheritance\HTML\Form\Element\Boolean;

class Checkbox extends Boolean
{
    public function render(): string
    {
        return <<<HTML
         <input type="checkbox" name="{$this->name}">
HTML;

    }
}