<?php

namespace App\VarianceExample\Animals\Dog;

use App\VarianceExample\Animals\Animal;

class Dog extends Animal
{

    public function speak()
    {
        echo $this->name . " barks";
    }
}