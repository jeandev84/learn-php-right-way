<?php

namespace Framework\Templating;

class View
{
     public function __construct(
         private string $template,
         private array $params = []
     )
     {
     }



     public function render(): string
     {
          extract($this->params);
          ob_start();
          require $this->template;
          return ob_get_clean();
     }

     public static function make(string $template, array $params = []): static
     {
          return new static($template, $params);
     }
}