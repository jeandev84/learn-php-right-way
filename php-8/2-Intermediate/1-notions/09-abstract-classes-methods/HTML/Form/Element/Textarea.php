<?php

namespace App\HTML\Form\Element;

use App\Inheritance\HTML\Form\Element\Field;

class Textarea extends Field
{

    public function render(): string
    {
        return <<<HTML
         <textarea name="{$this->name}"></textarea>
HTML;

    }
}