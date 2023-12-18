<?php

namespace App\Iterators\Invoices;

use Traversable;

class InvoiceIteratorAggregate implements \IteratorAggregate
{

    private int $key;


    public function __construct(public array $invoices)
    {
    }


    public function getIterator(): Traversable
    {
        /* return new MyCustomIterator($this->invoices); */

        return new \ArrayIterator($this->invoices);
    }
}