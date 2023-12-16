<?php
declare(strict_types=1);

namespace App\VarianceExample\Animals\Dog;

use App\VarianceExample\Animals\Animal;
use App\VarianceExample\Animals\AnimalShelter;

class DogShelter implements AnimalShelter
{

    public function adopt(string $name): Animal
    {
        return new Dog($name);
    }
}