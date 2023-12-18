<?php
declare(strict_types=1);

namespace Framework\Templating;

use Framework\Templating\Exceptions\ViewNotFoundException;

class View
{
     public function __construct(
         protected string $view,
         protected array  $params = []
     )
     {
     }


      /**
       * @return string
       * @throws ViewNotFoundException
     */
     public function render(): string
     {
          $viewPath = VIEW_PATH . '/' . $this->view . '.php';

          if (! file_exists($viewPath)) {
              throw new ViewNotFoundException();
          }

          /*
          foreach ($this->params as $key => $value) {
             $$key = $value;
          }
          */

          extract($this->params);
          ob_start();
          include $viewPath;
          return (string) ob_get_clean();
     }

     public static function make(string $template, array $params = []): mixed
     {
          return new static($template, $params);
     }


     public function __toString(): string
     {
         return $this->render();
     }


     public function __get(string $name): mixed
     {
         return $this->params[$name] ?? null;
     }
}