<?php
declare(strict_types=1);

namespace Framework;

use App\Connection;
use Framework\Http\Request\Request;
use Framework\Routing\Router;
use Framework\Routing\Exceptions\RouteNotfoundException;
use PDO;


class App
{
     private static PDO $db;

     /**
      * @param Router $router
     */
     public function __construct(protected Router $router, protected array $config)
     {
         static::$db = Connection::make();
     }



     public static function db(): PDO
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