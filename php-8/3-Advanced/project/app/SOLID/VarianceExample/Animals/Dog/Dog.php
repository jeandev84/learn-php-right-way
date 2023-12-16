<?php

namespace App\SOLID\VarianceExample\Animals\Dog;

use App\SOLID\VarianceExample\Animals\Animal;

class Dog extends Animal
{

    public function speak()
    {
        echo $this->name . " barks";
    }
}