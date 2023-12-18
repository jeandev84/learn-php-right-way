<?php

namespace Framework\Http\Response;

class RedirectResponse extends Response
{
       public function __construct(string $path = '', int $status = 301)
       {
           parent::__construct('', $status, ['Location' => $path]);
       }

       public function send(): mixed
       {
           parent::send();
           exit;
       }
}