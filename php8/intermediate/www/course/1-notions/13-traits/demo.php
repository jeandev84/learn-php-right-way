<?php

require_once __DIR__.'/../vendor/autoload.php';

$coffeeMaker = new \App\Traits\Coffee\Makers\CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker  = new \App\Traits\Coffee\Makers\LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();


$cappuccinoMaker = new \App\Traits\Coffee\Makers\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$allInOneCoffeeMaker = new \App\Traits\Coffee\Makers\AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuccino();
