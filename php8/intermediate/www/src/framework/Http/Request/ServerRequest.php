<?php

namespace Framework\Http\Request;

use Framework\Http\Cookie\Cookie;
use Framework\Http\Request\Bag\FileBag;
use Framework\Http\Request\Bag\InputBag;
use Framework\Http\Request\Bag\RequestHeadersBag;
use Framework\Http\Request\Bag\ServerBag;

class ServerRequest
{

     private string $method;
     private UriInterface $uri;
     private string $protocol;
     public InputBag $queries;
     public InputBag $request;
     public ServerBag $server;
     public RequestHeadersBag $headers;
     public Cookie $cookies;
     public FileBag $files;

     public function __construct(string $method, string $uri, string $protocol = '')
     {
         $this->withMethod($method);
         $this->withUri(new Uri($uri));
         $this->withProtocolVersion($protocol);
         $this->queries  = new InputBag();
         $this->request  = new InputBag();
         $this->server   = new ServerBag();
         $this->headers  = new RequestHeadersBag();
         $this->files    = new FileBag();
         $this->cookies  = new Cookie();
     }



     /**
      * @return string
     */
     public function getMethod(): string
     {
         return $this->method;
     }


     public function withMethod(string $method): static
     {
         $this->method = $method;

         return $this;
     }




    /**
     * @return UriInterface
     */
    public function getUri(): UriInterface
    {
        return $this->uri;
    }




    public function withUri(UriInterface $uri): static
    {
        $this->uri = $uri;

        return $this;
    }



    public function getProtocolVersion(): string
    {
         return $this->protocol;
    }



    public function withProtocolVersion(string $version): static
    {
        $this->protocol = $version;

        return $this;
    }




    public function getServerParams(): array
    {
        return $this->server->all();
    }



    public function withServerParams(array $serverParams): static
    {
        $this->server->add($serverParams);

        return $this;
    }



    public function getQueryParams(): array
    {
         return $this->queries->all();
    }



    public function withQueryParams(array $queries): static
    {
        $this->queries->add($queries);

        return $this;
    }




    /**
     * @return array
     */
    public function getParsedBody(): array
    {
        return $this->request->all();
    }


    /**
     * @param array $parsedBody
     * @return $this
     */
    public function withParsedBody(array $parsedBody): static
    {
        $this->request->add($parsedBody);

        return $this;
    }



    /**
     * @return array
     */
    public function getCookieParams(): array
    {
        return $this->cookies->all();
    }


    /**
     * @param array $cookies
     * @return $this
     */
    public function withCookieParams(array $cookies): static
    {
        $this->cookies->add($cookies);

        return $this;
    }



    public function getUploadedFiles(): array
    {
        return $this->files->all();
    }



    public function withUploadedFiles(array $files): static
    {
        $this->files->add($files);

        return $this;
    }





    /**
     * @return static
    */
    public static function createFromGlobals(): static
    {
         $request = new static(
      $_SERVER['REQUEST_METHOD'] ?? 'GET',
         'http://localhost:8000'. $_SERVER['REQUEST_URI'],
             $_SERVER['SERVER_PROTOCOL']
         );
         $request->withServerParams($_SERVER)
                 ->withQueryParams($_GET)
                 ->withParsedBody($_POST)
                 ->withCookieParams($_COOKIE)
                 ->withUploadedFiles($_FILES);

         return $request;
    }
}