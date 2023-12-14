<?php

namespace App\ObjectComparison;

class Invoice
{
   public function __construct(public float $amount, public string $description)
   {
   }
}