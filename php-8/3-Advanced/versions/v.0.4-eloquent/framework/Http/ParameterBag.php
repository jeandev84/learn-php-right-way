<?php

namespace Framework\Http;

class ParameterBag implements ParameterBagInterface
{

    private array $params = [];

    public function __construct(array $params = [])
    {
        $this->params = $params;
    }



    /**
     * @inheritdoc
    */
    public function set(string $name, $value): static
    {
        $this->params[$name] = $value;

        return $this;
    }


    public function add(array $params): static
    {
        $this->params = array_merge($this->params, $params);

        return $this;
    }



    /**
     * @inheritdoc
    */
    public function get(string $name, $default = null): mixed
    {
        return $this->params[$name] ?? $default;
    }




    /**
     * @inheritdoc
    */
    public function has(string $name): bool
    {
        return isset($this->params[$name]);
    }




    /**
     * @return array
    */
    public function all(): array
    {
        return $this->params;
    }
}