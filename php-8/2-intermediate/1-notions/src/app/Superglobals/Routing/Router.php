<?php
declare(strict_types=1);

namespace App\Superglobals\Routing;

use framework\Routing\Exceptions\RouteNotfoundException;

class Router
{
      private array $routes = [];


      public function register(string $route, callable $action): self
      {
          $this->routes[$route] = $action;

          return $this;
      }


      public function resolve(string $requestUri)
      {
          $route  = explode('?', $requestUri)[0];
          $action = $this->routes[$route] ?? null;

          if (! $action) {
              throw new RouteNotfoundException();
          }
      }


      /**
       * @return array
      */
      public function getRoutes(): array
      {
          return $this->routes;
      }
}