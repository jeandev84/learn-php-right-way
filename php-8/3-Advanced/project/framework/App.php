<?php
declare(strict_types=1);

namespace Framework;

use App\Connection;
use App\Services\EmailService;
use App\Services\InvoiceService;
use App\Services\PaymentGatewayService;
use App\Services\SalesTaxService;
use Framework\Config\Config;
use Framework\Container\Container;
use Framework\Database\DB;
use Framework\Http\Request\Request;
use Framework\Routing\Router;
use Framework\Routing\Exceptions\RouteNotfoundException;


class App
{
     private static DB $db;
     private static Container $container;


     /**
      * @param Router $router
      * @param Config $config
     */
     public function __construct(protected Router $router, protected Config $config)
     {
         static::$db = new DB($config->db ?? []);
         static::$container = new Container();

         static::$container->set(
              InvoiceService::class,
              function (Container $c) {
                  return new InvoiceService(
                      $c->get(SalesTaxService::class),
                      $c->get(PaymentGatewayService::class),
                      $c->get(EmailService::class)
                  );
              }
         );

         static::$container->set(SalesTaxService::class, fn() => new SalesTaxService());
         static::$container->set(PaymentGatewayService::class, fn() => new PaymentGatewayService());
         static::$container->set(EmailService::class, fn() => new EmailService());
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