<?php

namespace Framework\Routing\Attributes\Methods;

use Framework\Routing\Attributes\Route;
use Attribute;

#[Attribute]
class Put extends Route
{
   public function __construct(string $path)
   {
       parent::__construct($path, 'PUT');
   }
}