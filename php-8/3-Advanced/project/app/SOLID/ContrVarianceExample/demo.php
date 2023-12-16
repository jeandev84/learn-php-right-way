<?php
declare(strict_types=1);

use App\SOLID\ContrVarianceExample\Animals\AnimalFood;
use App\SOLID\ContrVarianceExample\Animals\Cat\CatShelter;
use App\SOLID\ContrVarianceExample\Animals\Dog\DogShelter;


$kitty = (new CatShelter())->adopt("Ricky");
$kitty->speak();
echo PHP_EOL;


$catFood = new AnimalFood();
$kitty->eat($catFood);


$doggy = (new DogShelter())->adopt("Mavrick");
$doggy->speak();
echo PHP_EOL;

$banana = new \App\SOLID\ContrVarianceExample\Animals\Food();
$doggy->eat($banana);

