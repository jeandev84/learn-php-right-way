<?php

namespace App\ContrVarianceExample\Animals\Dog;

use App\ContrVarianceExample\Animals\Animal;
use App\ContrVarianceExample\Animals\AnimalFood;

class Dog extends Animal
{

    public function speak()
    {
        echo $this->name . " barks";
    }

    public function eat(Food $food)
    {
        echo $this->name . " eats " . get_class($food);
    }
}