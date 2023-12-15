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
        if ($this->has($id)) {
            $entry = $this->entries[$id];
            return $entry($this);
        }

        return $this->resolve($id);
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



    public function resolve(string $id)
    {
        // 1. Inspect the class that we are trying to get from the container

        // 2. Inspect the constructor of the class

        // 3. Inspect the constructor parameters (dependencies)

        // 4. if the constructor parameter is a class then try to resolve that class using the container


    }

    private function createException(string $id)
    {
        throw new NotFoundException('Class "'. $id . '" has no binding');
    }
}