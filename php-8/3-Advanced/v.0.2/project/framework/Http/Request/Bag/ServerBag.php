<?php

namespace Framework\Http\Request\Bag;

use Framework\Http\ParameterBag;

class ServerBag extends ParameterBag
{
      public function getRequestUri(): string
      {
          return $this->get('REQUEST_URI', '/');
      }
}