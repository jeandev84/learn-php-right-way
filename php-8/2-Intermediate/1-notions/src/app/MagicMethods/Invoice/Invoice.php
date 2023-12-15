<?php
declare(strict_types=1);

namespace App\MagicMethods\Invoice;

class Invoice implements \Stringable
{

    protected array $data = [];
    

    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }


    public function __isset(string $name): bool
    {
        return array_key_exists($name, $this->data);
    }


    public function __unset(string $name): void
    {
        unset($this->data[$name]);
    }

    public function __call(string $name, array $arguments)
    {
        # var_dump($name, $arguments);
        if (method_exists($this, $name)) {
            # $this->{$name}(...$arguments);
            call_user_func_array([$this, $name], $arguments);
        }
    }


    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);
    }



    public function __toString(): string
    {
        return join(', ', $this->data);
    }



    public function __invoke(): void
    {
        // Call object as function
        # $obj = $this; $obj();
        var_dump('invoked');
    }



    public function __debugInfo(): ?array
    {

    }



    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }


    protected function process(float $amount, string $description)
    {
         var_dump('process');
    }
}