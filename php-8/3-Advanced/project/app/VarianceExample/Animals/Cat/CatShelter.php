<?php
declare(strict_types=1);

namespace App\VarianceExample\Animals\Cat;

use App\VarianceExample\Animals\Animal;
use App\VarianceExample\Animals\AnimalShelter;

class CatShelter implements AnimalShelter
{

    public function adopt(string $name): Animal
    {
         return new Cat($name);
    }
}