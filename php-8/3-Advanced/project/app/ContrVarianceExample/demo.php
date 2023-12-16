<?php
declare(strict_types=1);

use App\ContrVarianceExample\Animals\AnimalFood;
use App\ContrVarianceExample\Animals\Cat\CatShelter;
use App\ContrVarianceExample\Animals\Dog\DogShelter;


$kitty = (new CatShelter())->adopt("Ricky");
$kitty->speak();
echo PHP_EOL;


$catFood = new AnimalFood();
$kitty->eat($catFood);


$doggy = (new DogShelter())->adopt("Mavrick");
$doggy->speak();
echo PHP_EOL;

$banana = new \App\ContrVarianceExample\Animals\Food();
$doggy->eat($banana);

