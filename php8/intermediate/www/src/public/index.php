<?php

require_once __DIR__.'/../vendor/autoload.php';


$collector = new \App\Collector\CollectionAgency();

echo $collector->collect(100);