<?php
declare(strict_types=1);

namespace Framework\Routing\Attributes;

use Attribute;

#[Attribute]
class Put extends Route
{
   public function __construct(string $path)
   {
       parent::__construct($path, 'PUT');
   }
}