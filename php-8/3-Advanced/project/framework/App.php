<?php
declare(strict_types=1);

namespace Framework;

use App\Services\Api\Emailable\EmailValidationService as EmailableService;
use Dotenv\Dotenv;
use Framework\Config\Config;
use Framework\Database\DB;
use Framework\Mailer\Symfony\CustomMailer;
use Framework\Routing\Exceptions\RouteNotfoundException;
use Framework\Routing\Router;
use Framework\Templating\Contract\RenderInterface;
use Framework\Templating\Twig\TwigRenderAdapter;
use Framework\Validation\Contracts\EmailValidationInterface;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Symfony\Component\Mailer\MailerInterface;
use Twig\Extra\Intl\IntlExtension;

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
         # initialize environments
         $dotenv = Dotenv::createImmutable(dirname(__DIR__));
         $dotenv->load();

         # initialize config
         $this->config = new Config($_ENV);

         # initialize database
         $this->initDb($this->config->db);

         # bindings services
         $twig = new TwigRenderAdapter([
             'cache' => STORAGE_PATH . '/cache',      # cache path
             'auto_reload' => true,                   # refresh cache render
         ]);

         # read: https://www.php.net/manual/en/intro.intl.php
         $twig->addExtension(new IntlExtension());


         $this->container->singleton(RenderInterface::class, fn() => $twig);
         $this->container->bind(
             EmailValidationInterface::class,
             fn() => new EmailableService($this->config->apiKeys['emailable'])
         );

         /*
         $this->container->bind(
             EmailValidationInterface::class,
             fn() => new AbstractApiEmailService($this->config->apiKeys['abstract_api_email_validation'])
         );
         */

         return $this;
     }




     public function run()
     {
         try {
             echo $this->router->resolve($this->request['uri'], $this->request['method']);
         } catch (RouteNotfoundException $e) {
             # header('HTTP/1.1 404 Not Found');
             http_response_code(404);
             echo Templating\PHP\View::make('errors/404');
         }
     }
}