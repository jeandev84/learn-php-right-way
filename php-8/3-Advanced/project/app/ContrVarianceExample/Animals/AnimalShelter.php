<?php
declare(strict_types=1);

namespace App\ContrVarianceExample\Animals;

interface AnimalShelter
{
     public function adopt(string $name): Animal;
}