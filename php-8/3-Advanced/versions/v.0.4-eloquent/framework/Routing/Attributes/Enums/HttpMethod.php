<?php
declare(strict_types=1);

namespace Framework\Routing\Attributes\Enums;

enum HttpMethod: string
{
     case Get    = 'GET';
     case Post   = 'POST';
     case Put    = 'PUT';
     case Delete = 'DELETE';
     case Head   = 'HEAD';
}
