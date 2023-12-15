<?php

namespace App\HTML\Form\Element;

use App\Inheritance\HTML\Form\Element\Field;

class Text extends Field
{
     public function render(): string
     {
         return <<<HTML
         <input type="text" name="{$this->name}">
HTML;

     }
}