<?php
declare(strict_types=1);

namespace Tests\Unit;

use Framework\Routing\Exceptions\RouteNotfoundException;
use Framework\Routing\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{

       protected Router $router;


       protected function setUp(): void
       {
           parent::setUp();

           // given that we have a router object
           $this->router = new Router();
       }



       public function test_it_registers_a_route(): void
       {
           // when we call a register method
           $this->router->register('GET', '/users', ['Users', 'index']);

           $expected = [
              'GET' => [
                  '/users' => ['Users', 'index']
              ]
           ];

           // then we assert route was registered
           $this->assertEquals($expected, $this->router->routes());
       }



       public function test_it_registers_a_get_route()
       {
           // when we call a register method
           $this->router->get('/users', ['Users', 'index']);

           $expected = [
               'GET' => [
                   '/users' => ['Users', 'index']
               ]
           ];

           // then we assert route was registered
           $this->assertEquals($expected, $this->router->routes());
       }



       public function test_it_registers_a_post_route()
       {

           // when we call a register method
           $this->router->post('/users', ['Users', 'store']);

           $expected = [
               'POST' => [
                   '/users' => ['Users', 'store']
               ]
           ];

           // then we assert route was registered
           $this->assertEquals($expected, $this->router->routes());
       }


       public function test_there_are_no_routes_when_router_is_created(): void
       {
            $this->assertEmpty((new Router())->routes());
       }


       /**
        * @param string $requestUri
        * @param string $requestMethod
        * @return void
        * @throws RouteNotfoundException
        *
        * @dataProvider \Tests\DataProviders\RouterDataProvider::routeNotFoundCases()
       */
       public function test_it_throws_route_not_found_exception(
           string $requestUri,
           string $requestMethod
       ): void
       {

           $users = new class() {
              public function delete(): bool
              {
                  return true;
              }
           };

           $this->router->post('/users', [$users::class, 'store']);
           $this->router->get('/users', ['Users', 'index']);

           $this->expectException(RouteNotfoundException::class);

           $this->router->resolve($requestUri, $requestMethod);
       }
}