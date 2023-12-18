<?php
declare(strict_types=1);

namespace Framework\Routing\Attributes;

use Attribute;
use Framework\Routing\Attributes\Enums\HttpMethod;

#[Attribute(Attribute::TARGET_METHOD|Attribute::IS_REPEATABLE)]
class Delete extends Route
{
     public function __construct(string $path)
     {
         parent::__construct($path, HttpMethod::Delete);
     }
}