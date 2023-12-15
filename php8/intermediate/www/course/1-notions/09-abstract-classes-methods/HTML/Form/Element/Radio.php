<?php
namespace App\HTML\Form\Element;

use App\Inheritance\HTML\Form\Element\Boolean;

class Radio extends Boolean
{
    public function render(): string
    {
        return <<<HTML
         <input type="radio" name="{$this->name}">
HTML;

    }
}