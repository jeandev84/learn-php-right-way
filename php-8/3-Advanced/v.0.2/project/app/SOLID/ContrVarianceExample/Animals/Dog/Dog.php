<?php

namespace App\SOLID\ContrVarianceExample\Animals\Dog;

use App\ContrVarianceExample\Animals\Dog\Food;
use App\SOLID\ContrVarianceExample\Animals\Animal;

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