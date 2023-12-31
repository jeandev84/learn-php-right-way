<?php

namespace App\Controllers;

use App\Services\InvoiceService;
use Framework\Routing\Attributes\Get;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;


class InvoiceController
{

    public function __construct(private readonly Twig $twig, private InvoiceService $invoiceService)
    {
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
    */
    #[Get('/invoices')]
    public function index(Request $request, Response $response, $args): Response
    {
        return $this->twig->render(
            $response,
    'invoices/index.twig',
            ['invoices' => $this->invoiceService->getPaidInvoices()]
        );
    }
}