<?php

namespace Framework\Http\Request;

class Request extends ServerRequest
{
     public function __construct(string $method, string $uri, string $protocol = '', array $headers = [])
     {
         parent::__construct($method, $uri, $protocol, $headers);
     }


     public function requestUri(): string
     {
         return $this->server->getRequestUri();
     }
}