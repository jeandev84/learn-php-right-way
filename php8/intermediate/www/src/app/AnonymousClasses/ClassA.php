<?php

namespace App\AnonymousClasses;

class ClassA
{
    public function __construct(public int $x, public int $y)
    {
    }


    public function foo(): string
    {
        return 'foo';
    }


    public function bar(): object
    {
        /*
        return new class extends ClassA {
            public function __construct(int $x, int $y)
            {
                parent::__construct($x, $y);
                $foo = $this->foo();
                echo $foo;
            }
        };

        return new class($this->x, $this->y) extends ClassA {
            public function __construct(int $x, int $y)
            {
                parent::__construct($x, $y);
                $foo = $this->foo();
                echo $foo;
            }
        };
        */

        return new class($this) extends ClassA {
            public function __construct(ClassA $obj)
            {
                var_dump($obj);
            }
        };
    }
}