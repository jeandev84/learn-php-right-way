<?php

namespace Framework\Http\Request;

interface UploadedFileInterface
{


     public function getClientFilename();


     public function getClientType(): string;




     /**
      * @param string $target
      *
      * @return mixed
     */
     public function moveTo(string $target): mixed;
}