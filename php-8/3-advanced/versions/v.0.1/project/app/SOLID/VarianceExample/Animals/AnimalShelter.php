<?php
declare(strict_types=1);

namespace App\SOLID\VarianceExample\Animals;

interface AnimalShelter
{
     public function adopt(string $name): Animal;
}