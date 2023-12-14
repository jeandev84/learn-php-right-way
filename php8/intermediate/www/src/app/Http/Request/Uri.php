<?php

namespace App\Http\Request;

class Uri implements UriInterface
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }


    public function __toString(): string
    {
        return $this->path;
    }
}