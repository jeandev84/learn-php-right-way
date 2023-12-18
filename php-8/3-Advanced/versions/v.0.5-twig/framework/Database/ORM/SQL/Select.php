<?php

namespace Framework\Database\ORM\SQL;

class Select
{
    protected array $selects = [];
    protected array $from    = [];

    public function select(string ...$selects): self
    {
        $this->selects = array_merge($this->selects, $selects);

        return $this;
    }


     public function from(string $table, string $alias = ''): self
     {
          $this->from[$table] = ($alias ? "$table $alias" : $table);

          return $this;
     }


     public function getSQL(): string
     {
          return '';
     }
}