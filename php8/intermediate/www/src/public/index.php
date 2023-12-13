<?php

require_once __DIR__.'/../vendor/autoload.php';


/*
$collector = new \App\Collector\CollectionAgency();
echo $collector->collect(100);
*/

$service = new \App\Collector\DebtCollectionService();

$service->collectDebt(new \App\Collector\Rocky());