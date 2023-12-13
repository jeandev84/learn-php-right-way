<?php

namespace App\Invoice;

class InvoiceDebugger
{

  private float $amount;
  private int $id = 1;
  private string $accountNumber = '0123456789';

  public function __debugInfo(): ?array
  {
      return [
          'id' => $this->id,
          'accountNumber' => "****". substr($this->accountNumber, -4),
      ];
  }
}


$debug = new InvoiceDebugger();
var_dump($debug);