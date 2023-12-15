<?php
declare(strict_types=1);

namespace Framework\Container;

use Framework\Container\Exceptions\NotFoundException;
use Psr\Container\ContainerInterface;

/**
 * @inheritdoc
*/
class Container implements ContainerInterface
{

    protected array $entries = [];


    /**
     * @inheritdoc
    */
    public function get(string $id)
    {
        if (! $this->has($id)) {
             throw new NotFoundException('Class "'. $id . '" has no binding');
        }

        $entry = $this->entries[$id];

        return $entry($this);
    }



    /**
     * @inheritdoc
    */
    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }



    public function set(string $id, callable $concrete): void
    {
        $this->entries[$id] = $concrete;
    }
}