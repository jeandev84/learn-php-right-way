<?php
declare(strict_types=1);

namespace App\SOLID\ContrVarianceExample\Animals\Dog;

use App\SOLID\ContrVarianceExample\Animals\AnimalShelter;

class DogShelter implements AnimalShelter
{

    public function adopt(string $name): Dog
    {
        return new Dog($name);
    }
}