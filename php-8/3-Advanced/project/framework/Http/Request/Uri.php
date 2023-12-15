<?php

namespace Framework\Http\Request;

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

    public function getScheme(): string
    {
        return parse_url($this->path, PHP_URL_SCHEME);
    }

    public function getHost(): string
    {
        return parse_url($this->path, PHP_URL_HOST);
    }


    public function getAuthority(): string
    {
        $username = parse_url($this->path, PHP_URL_USER);
        $password = parse_url($this->path, PHP_URL_PASS);

        return "$username@$password";
    }



    public function getPort(): int
    {
        return parse_url($this->path, PHP_URL_PORT);
    }

    public function getPath(): string
    {
        return parse_url($this->path, PHP_URL_PATH);
    }

    public function getQueryString(): string
    {
        return parse_url($this->path, PHP_URL_QUERY);
    }

    public function getFragment(): string
    {
        return parse_url($this->path, PHP_URL_FRAGMENT);
    }
}