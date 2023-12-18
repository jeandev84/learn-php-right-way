<?php
declare(strict_types=1);

use App\SOLID\VarianceExample\Animals\Cat\CatShelter;
use App\SOLID\VarianceExample\Animals\Dog\DogShelter;


$kitty = (new CatShelter())->adopt("Ricky");
$kitty->speak();
echo PHP_EOL;


$doggy = (new DogShelter())->adopt("Mavrick");
$doggy->speak();
echo PHP_EOL;

