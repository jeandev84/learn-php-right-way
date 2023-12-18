<?php

declare(strict_types=1);

use App\Services\Shipping\BillableWeightCalculatorService;
use App\Services\Shipping\ValueObject\Package\DimDivisor;
use App\Services\Shipping\ValueObject\Package\PackageDimension;
use App\Services\Shipping\ValueObject\Package\Weight;

require __DIR__.'/../vendor/autoload.php';

/*
$package = [
   'weight' => 6,
   'dimensions' => [
       'width'  => 9,
       'length' => 15,
       'height' => 7
   ]
];


$fedexDimDivisor = 0;

$billableWeight = (new BillableWeightCalculatorService())->calculate(
   $package['dimensions']['width'],
   $package['dimensions']['height'],
   $package['dimensions']['length'],
   $package['weight'],
   $fedexDimDivisor
);

echo $billableWeight . ' lb'. PHP_EOL;
*/



$package = [
    'weight' => 6,
    'dimensions' => [
        'width'  => 9,
        'length' => 15,
        'height' => 7
    ]
];


$billableWeightService = new BillableWeightCalculatorService();

$packageDimensions = new PackageDimension(
    $package['dimensions']['width'],
    $package['dimensions']['height'],
    $package['dimensions']['length']
);

$weight = new Weight($package['weight']);

$billableWeight = $billableWeightService->calculate(
    $packageDimensions,
    $weight,
    DimDivisor::FEDEX
);

$widerPackageDimensions = $packageDimensions->increaseWith(10);

$widerPackageBillableWeight = $billableWeightService->calculate(
    $widerPackageDimensions,
    $weight,
    DimDivisor::FEDEX
);

echo $billableWeight . ' lb'. PHP_EOL;
echo $widerPackageBillableWeight . ' lb'. PHP_EOL;


