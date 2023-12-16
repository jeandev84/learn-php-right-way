<?php
declare(strict_types=1);

use App\VarianceExample\Animals\Cat\CatShelter;
use App\VarianceExample\Animals\Dog\DogShelter;


$kitty = (new CatShelter())->adopt("Ricky");
$kitty->speak();
echo PHP_EOL;


$doggy = (new DogShelter())->adopt("Mavrick");
$doggy->speak();
echo PHP_EOL;

