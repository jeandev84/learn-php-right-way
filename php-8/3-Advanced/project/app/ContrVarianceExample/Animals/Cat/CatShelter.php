<?php
declare(strict_types=1);

namespace App\ContrVarianceExample\Animals\Cat;

use App\ContrVarianceExample\Animals\Animal;
use App\ContrVarianceExample\Animals\AnimalShelter;

class CatShelter implements AnimalShelter
{

    public function adopt(string $name): Cat
    {
         return new Cat($name);
    }
}