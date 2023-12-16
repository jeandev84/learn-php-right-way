<?php
declare(strict_types=1);

namespace Framework\Routing\Attributes;

use Attribute;

// #[Attribute(Attribute::TARGET_METHOD|Attribute::TARGET_CLASS)]
#[Attribute(Attribute::TARGET_METHOD|Attribute::IS_REPEATABLE)]
class Get extends Route
{
    public function __construct(string $path)
    {
        parent::__construct($path);
    }
}