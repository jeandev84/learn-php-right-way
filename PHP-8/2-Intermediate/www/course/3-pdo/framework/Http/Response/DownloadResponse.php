<?php

namespace Framework\Http\Response;

class DownloadResponse extends Response
{

     /**
      * @var string
     */
     protected string $path;


     /**
      * @param string $path
      *
      * @param string $filename
     */
     public function __construct(string $path, string $filename)
     {
         // TODO reviews
         $mimeType = mime_content_type($filename);
         parent::__construct('', 200, [
             'Content-Type' => $mimeType,
             'Content-Disposition' => 'attachment;filename"'. $filename . '"'
         ]);

         $this->path = $path;
     }



     public function send(): int
     {
         parent::send();
         return readfile($this->path);
     }
}