<?php
declare(strict_types=1);

namespace Framework\Routing\Attributes;

use Attribute;
use Framework\Routing\Contracts\RouteInterface;

#[Attribute]
class Route implements RouteInterface
{
    public function __construct(public string $path, public string $method = 'GET')
    {
    }
}