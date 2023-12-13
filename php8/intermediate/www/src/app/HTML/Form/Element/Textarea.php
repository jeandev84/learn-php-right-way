<?php

namespace App\HTML\Form\Element;

class Textarea extends Field
{

    public function render(): string
    {
        return <<<HTML
         <input type="text" name="{$this->name}">
HTML;

    }
}