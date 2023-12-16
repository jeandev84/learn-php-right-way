<?php

namespace Framework\Http\Response;

class Response
{
     public function __construct(
         private string $body = '',
         private int $status = 200,
         private array $headers = []
     )
     {
     }


    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }


    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }


    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }



    public function send(): mixed
    {
        if (headers_sent()) {
            return true;
        }

        http_response_code($this->status);

        foreach ($this->headers as $name => $value) {
            header("$name: $value");
        }

        return true;
    }
}