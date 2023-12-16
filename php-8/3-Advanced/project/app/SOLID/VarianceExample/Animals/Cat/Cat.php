<?php

namespace App\SOLID\VarianceExample\Animals\Cat;

use App\SOLID\VarianceExample\Animals\Animal;

class Cat extends Animal
{

    public function speak()
    {
        echo $this->name ." meows";
    }
}