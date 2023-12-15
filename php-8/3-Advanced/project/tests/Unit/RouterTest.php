<?php
declare(strict_types=1);

namespace Tests\Unit;

use Framework\Routing\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
       public function test_that_it_registers_a_route(): void
       {
           // given that we have a router object
           $router = new Router();

           // when we call a register method
           $router->register('GET', '/users', ['Users', 'index']);

           $expected = [
              'GET' => [
                  '/users' => ['Users', 'index']
              ]
           ];

           // then we assert route was registered
           $this->assertEquals($expected, $router->routes());
       }
}