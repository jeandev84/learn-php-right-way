<?php

namespace App\ContrVarianceExample\Animals\Cat;

use App\ContrVarianceExample\Animals\Animal;

class Cat extends Animal
{

    public function speak()
    {
        echo $this->name ." meows";
    }
}