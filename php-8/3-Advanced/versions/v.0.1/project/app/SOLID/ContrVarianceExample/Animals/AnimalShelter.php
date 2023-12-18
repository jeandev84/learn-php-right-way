<?php
declare(strict_types=1);

namespace App\SOLID\ContrVarianceExample\Animals;

interface AnimalShelter
{
     public function adopt(string $name): Animal;
}