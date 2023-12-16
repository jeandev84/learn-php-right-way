<?php
declare(strict_types=1);

namespace App\WeakMap;

class Invoice
{
     public function __destruct()
     {
         echo 'Invoice Destructor'. PHP_EOL;
     }
}