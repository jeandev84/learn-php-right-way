<?php
declare(strict_types=1);

namespace Framework;

use App\Services\Contract\PaymentGatewayInterface;
use App\Services\Gateway\PaymentGateway;
use Dotenv\Dotenv;
use Framework\Config\Config;
use Framework\Database\DB;
use Framework\Mailer\Symfony\CustomMailer;
use Framework\Routing\Exceptions\RouteNotfoundException;
use Framework\Routing\Router;
use Symfony\Component\Mailer\MailerInterface;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;

class App
{
      private static DB $db;
      private Config $config;


      /**
       * @param Container $container
       * @param Router|null $router
       * @param array $request
     */
     public function __construct(
         protected Container $container,
         protected ?Router $router = null,
         protected array $request  = []
     )
     {

     }



     private function initDb(array $config)
     {
         $capsule = new Capsule;

         $capsule->addConnection($config);
         $capsule->setEventDispatcher(new Dispatcher($this->container));
         $capsule->setAsGlobal();
         $capsule->bootEloquent();
     }


     public function boot(): static
     {
         $dotenv = Dotenv::createImmutable(dirname(__DIR__));
         $dotenv->load();

         $this->config = new Config($_ENV);

         $this->initDb($this->config->db);

         $this->container->bind(PaymentGatewayInterface::class, PaymentGateway::class);
         $this->container->bind(MailerInterface::class, fn() => new CustomMailer($this->config->mailer['dsn']));

         return $this;
     }


     public function run()
     {
         try {
             echo $this->router->resolve($this->request['uri'], $this->request['method']);
         } catch (RouteNotfoundException $e) {
             # header('HTTP/1.1 404 Not Found');
             http_response_code(404);
             echo \Framework\Templating\View::make('errors/404');
         }
     }
}