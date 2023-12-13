<?php

namespace App\Collector;

class DebtCollectionService
{
      public function collectDebt(DebtCollectorInterface $collector): void
      {
          $owedAmount = mt_rand(100, 1000);
          $collectedAmount = $collector->collect($owedAmount);

          echo 'Collected $'. $collectedAmount . ' out of $'. $owedAmount. PHP_EOL;
      }
}


/*
$collector = new \App\Collector\CollectionAgency();
echo $collector->collect(100);
*/

$service = new \App\Collector\DebtCollectionService();

$service->collectDebt(new \App\Collector\Rocky());