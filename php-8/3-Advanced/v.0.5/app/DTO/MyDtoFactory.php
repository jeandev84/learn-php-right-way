<?php
namespace App\DTO;

use Framework\Http\Request\Request;

class MyDtoFactory
{
     public function __construct()
     {
     }


     public static function fromArray(array $data): MyDto
     {
         return new MyDto($data);
     }


     public static function fromRequest(Request $request): MyDto
     {
         return new MyDto($request->queries->all());
     }
}