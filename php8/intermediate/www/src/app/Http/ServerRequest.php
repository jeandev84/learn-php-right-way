<?php

namespace App\Http;

class ServerRequest
{

     private string $method;
     private string $uri;
     private string $protocol;
     protected $server;

     public function __construct(
         string $method,
         string $uri,
         string $protocol = '',
     )
     {
     }
}