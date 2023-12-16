<?php
declare(strict_types=1);

namespace Framework\Routing;

use Framework\Container\Container;
use Framework\Routing\Attributes\Route;
use Framework\Routing\Exceptions\RouteNotfoundException;

class Router
{
      private array $routes = [];

      public function __construct(private Container $container)
      {

      }


      public function registerRoutesFromControllerAttributes(array $controllers)
      {
           foreach ($controllers as $controller) {
               $reflectionController = new \ReflectionClass($controller);

               foreach ($reflectionController->getMethods() as $method) {
                   // get all attributes associated to the method
                   /* $attributes = $method->getAttributes(); returns all stuff attributes */
                   // filter attributes and get only Route
                   $attributes = $method->getAttributes(Route::class);

                   foreach ($attributes as $attribute) {
                       $route = $attribute->newInstance(); // Route
                       $this->register($route->method, $route->path, [$controller, $method->getName()]);
                   }
               }
           }
      }


      public function register(string $method, string $route, callable|array $action): self
      {
          $this->routes[$method][$route] = $action;

          return $this;
      }


      public function get(string $route, callable|array $action): self
      {
          return $this->register('GET', $route, $action);
      }


      public function post(string $route, callable|array $action): self
      {
          return $this->register('POST', $route, $action);
      }



      public function put(string $route, callable|array $action): self
      {
          return $this->register('PUT', $route, $action);
      }



    public function delete(string $route, callable|array $action): self
    {
        return $this->register('DELETE', $route, $action);
    }



      public function resolve(string $requestUri, string $requestMethod): mixed
      {
          $route  = explode('?', $requestUri)[0];
          $action = $this->routes[$requestMethod][$route] ?? null;

          if (! $action) {
              throw new RouteNotfoundException();
          }

          if(is_callable($action)) {
              return call_user_func($action);
          }

          if (is_array($action)) {
              [$class, $method] = $action;
              if (class_exists($class)) {
                  $class = $this->container->get($class);
                  if (method_exists($class, $method)) {
                      return call_user_func_array([$class, $method], []);
                  }
              }
          }

          throw new RouteNotfoundException();
      }




      /**
       * @return array
      */
      public function routes(): array
      {
          return $this->routes;
      }
}