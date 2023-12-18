<?php

namespace App\SOLID\ContrVarianceExample\Animals\Cat;

use App\SOLID\ContrVarianceExample\Animals\Animal;

class Cat extends Animal
{

    public function speak()
    {
        echo $this->name ." meows";
    }
}