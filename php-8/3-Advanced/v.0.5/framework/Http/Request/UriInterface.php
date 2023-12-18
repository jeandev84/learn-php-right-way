<?php

namespace Framework\Http\Request;

interface UriInterface extends \Stringable
{
    public function getScheme(): string;
    public function getAuthority(): string;

    public function getHost(): string;
    public function getPort(): int;

    public function getPath(): string;
    public function getQueryString(): string;
    public function getFragment(): string;
}