<?php

namespace Framework\Routing\Attributes\Methods;

use Framework\Routing\Attributes\Route;


#[Attribute]
class Delete extends Route
{
     public function __construct(string $path)
     {
         parent::__construct($path, 'DELETE');
     }
}