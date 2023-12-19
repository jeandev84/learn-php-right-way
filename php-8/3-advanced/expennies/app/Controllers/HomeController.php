<?php
declare(strict_types = 1);

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class HomeController
{
    public function __construct(private readonly Twig $twig)
    {
    }

    public function index(Request $request, Response $response): Response
    {
        return $this->twig->render($response, 'dashboard.twig');
    }


    private function xssAttack()
    {
        /*
         $user = $request->getAttribute('user');
         var_dump($user?->getName());
         $userName = $request->getAttribute('user')->getName();
         $userName = '<script>alert(1)</script>';
         include VIEW_PATH . '/xss.php';
       */

        $userName = '<script>alert(1)</script>';
        include VIEW_PATH . '/xss.php';
    }
}