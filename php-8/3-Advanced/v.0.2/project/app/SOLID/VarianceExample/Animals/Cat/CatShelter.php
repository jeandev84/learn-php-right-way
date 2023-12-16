<?php
declare(strict_types=1);

namespace App\SOLID\VarianceExample\Animals\Cat;

use App\SOLID\VarianceExample\Animals\AnimalShelter;

class CatShelter implements AnimalShelter
{

    public function adopt(string $name): Cat
    {
         return new Cat($name);
    }
}