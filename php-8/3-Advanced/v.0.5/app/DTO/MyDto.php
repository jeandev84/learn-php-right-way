<?php
declare(strict_types=1);

namespace App\DTO;

use Framework\Http\Request\Request;

class MyDto
{
    public function __construct(public array $data)
    {
    }


    /*
    public static function fromArray(array $data): static
    {
        return new self($data);
    }



    public static function fromRequest(Request $request): MyDto
    {
        return new self($request->queries->all());
    }
    */
}