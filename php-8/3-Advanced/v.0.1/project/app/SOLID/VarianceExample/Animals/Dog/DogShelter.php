<?php
declare(strict_types=1);

namespace App\SOLID\VarianceExample\Animals\Dog;

use App\SOLID\VarianceExample\Animals\AnimalShelter;

class DogShelter implements AnimalShelter
{

    public function adopt(string $name): Dog
    {
        return new Dog($name);
    }
}