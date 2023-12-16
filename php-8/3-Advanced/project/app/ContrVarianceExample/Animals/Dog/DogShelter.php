<?php
declare(strict_types=1);

namespace App\ContrVarianceExample\Animals\Dog;

use App\ContrVarianceExample\Animals\Animal;
use App\ContrVarianceExample\Animals\AnimalShelter;

class DogShelter implements AnimalShelter
{

    public function adopt(string $name): Dog
    {
        return new Dog($name);
    }
}