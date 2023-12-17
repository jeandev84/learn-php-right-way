<?php
declare(strict_types=1);

namespace Framework;

use App\Services\Contract\PaymentGatewayInterface;
use App\Services\Gateway\PaymentGateway;
use Framework\Config\Config;
use Framework\Container\Container;
use Framework\Database\DB;
use Framework\Http\Request\Request;
use Framework\Mailer\Symfony\CustomMailer;
use Framework\Routing\Exceptions\RouteNotfoundException;
use Framework\Routing\Router;
use Symfony\Component\Mailer\MailerInterface;


class App
{
      private static DB $db;

      /**
       * @param Container $container
       * @param Config $config
       * @param Router|null $router
     */
     public function __construct(
         protected Container $container,
         protected Config $config,
         protected ?Router $router = null,
     )
     {
         static::$db = new DB($config->db ?? []);

         $this->container->bind(PaymentGatewayInterface::class, PaymentGateway::class);
         $this->container->bind(MailerInterface::class, fn() => new CustomMailer($config->mailer['dsn']));
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