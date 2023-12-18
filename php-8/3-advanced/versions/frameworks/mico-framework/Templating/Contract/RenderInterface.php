<?php
declare(strict_types=1);

namespace Framework\Templating\Contract;

interface RenderInterface
{

     /**
      * @param $template
      * @param array $data
      * @return string
     */
     public function render($template, array $data = []): string;
}