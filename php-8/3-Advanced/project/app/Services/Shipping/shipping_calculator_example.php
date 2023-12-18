<?php

declare(strict_types=1);

use App\Services\Shipping\BillableWeightCalculatorService;

require 'vendor/autoload.php';

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