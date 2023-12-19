<?php

declare(strict_types = 1);

namespace App\DataObjects;

use App\Enum\SameSite;

class SessionConfig
{
    public function __construct(
        public readonly string $name,
        public readonly bool $secure,
        public readonly bool $httpOnly,
        public readonly SameSite $sameSite
    ) {
    }


    public function getCookieParams(): array
    {
         return [
             'secure'   => $this->secure,
             'httponly' => $this->httpOnly,
             'samesite' => $this->sameSite->value,
         ];
    }
}