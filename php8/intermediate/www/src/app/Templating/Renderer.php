<?php

namespace App\Templating;

class Renderer
{
      public function __construct(private string $viewPath)
      {
      }


      public function render(string $template, array $params = []): string
      {
          extract($params);
          ob_start();
          require $this->viewPath . DIRECTORY_SEPARATOR . $template;
          return ob_get_clean();
      }
}