<?php

namespace App\VarianceExample\Animals\Cat;

use App\VarianceExample\Animals\Animal;

class Cat extends Animal
{

    public function speak()
    {
        echo $this->name ." meows";
    }
}