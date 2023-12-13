<?php

require_once __DIR__.'/../vendor/autoload.php';

$coffeeMaker = new \App\Coffee\Makers\CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker  = new \App\Coffee\Makers\LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();


$cappuccinoMaker = new \App\Coffee\Makers\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$allInOneCoffeeMaker = new \App\Coffee\Makers\AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuccino();
