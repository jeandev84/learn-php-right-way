<?php
declare(strict_types=1);

namespace Framework;

use App\Services\Contract\PaymentGatewayInterface;
use App\Services\Gateway\PaymentGateway;
use App\Services\StripePayment;
use Framework\Config\Config;
use Framework\Container\Container;
use Framework\Database\DB;
use Framework\Http\Request\Request;
use Framework\Routing\Exceptions\RouteNotfoundException;
use Framework\Routing\Router;


class App
{
      private static DB $db;

      /**
       * @param Container $container
       * @param Router $router
       * @param Config $config
     */
     public function __construct(
         protected Container $container,
         protected Router $router,
         protected Config $config
     )
     {
         static::$db = new DB($config->db ?? []);

         $this->container->bind(PaymentGatewayInterface::class, StripePayment::class);
     }



     public static function db(): DB
     {
         return static::$db;
     }


     public function run(Request $request)
     {
         try {
             echo $this->router->resolve(
                 $request->requestUri(),
                 $request->getMethod()
             );
         } catch (RouteNotfoundException $e) {
             # header('HTTP/1.1 404 Not Found');
             http_response_code(404);
             echo \Framework\Templating\View::make('errors/404');
         }
     }
}