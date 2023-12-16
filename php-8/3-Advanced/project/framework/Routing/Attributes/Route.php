<?php
declare(strict_types=1);

namespace Framework\Routing\Attributes;

use Attribute;

#[Attribute]
class Route
{
    public function __construct(public string $path, public string $method = 'GET')
    {
    }
}