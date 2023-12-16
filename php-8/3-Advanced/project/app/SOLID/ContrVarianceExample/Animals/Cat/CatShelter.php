<?php
declare(strict_types=1);

namespace App\SOLID\ContrVarianceExample\Animals\Cat;

use App\SOLID\ContrVarianceExample\Animals\AnimalShelter;

class CatShelter implements AnimalShelter
{

    public function adopt(string $name): Cat
    {
         return new Cat($name);
    }
}