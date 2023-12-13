<?php

namespace App\HTML\Form\Element;

class Textarea extends Field
{

    public function render(): string
    {
        return <<<HTML
         <textarea name="{$this->name}"></textarea>
HTML;

    }
}