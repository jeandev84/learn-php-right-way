<?php

namespace App\Http;

interface ParameterBagInterface
{
    /**
     * @param string $name
     *
     * @param $value
     *
     * @return $this
     */
    public function set(string $name, $value): static;




    /**
     * @param string $name
     *
     * @param $default
     *
     * @return mixed
    */
    public function get(string $name, $default = null): mixed;



    /**
     * @param string $name
     *
     * @return bool
    */
    public function has(string $name): bool;
}