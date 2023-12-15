<?php

namespace App\Iterators\Invoices;

// InvoiceCollection
class InvoiceIterator implements \Iterator
{

      private int $key;


      public function __construct(public array $invoices)
      {
      }

      public function current(): mixed
      {
          echo __METHOD__. PHP_EOL;
          # return current($this->invoices);

          return $this->invoices[$this->key];
      }

      public function next(): void
      {
          echo __METHOD__. PHP_EOL;

          # next($this->invoices);

          ++$this->key;
      }



      public function key(): mixed
      {
          # echo __METHOD__. PHP_EOL;

          # return key($this->invoices);

          return $this->key;
      }


      public function valid(): bool
      {
          echo __METHOD__. PHP_EOL;

          # return current($this->invoices) !== false;

          return isset($this->invoices[$this->key]);
      }



      public function rewind(): void
      {
           echo __METHOD__. PHP_EOL;

           # reset($this->invoices);

           $this->key = 0;
      }
}