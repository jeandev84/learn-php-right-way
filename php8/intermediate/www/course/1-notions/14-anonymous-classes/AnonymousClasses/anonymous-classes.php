<?php

/*
$obj = new class {
};
*/

class MyClass {

}

interface MyInterface {

}

trait MyTrait {

}

$obj = new class(1, 2, 3) extends MyClass implements MyInterface {
    use MyTrait;
    public function __construct(
        public int $x, public int $y, public int $z
    )
    {
    }
};

dump($obj);
dump(get_class($obj));


/*
$obj = new class {
};


class MyClass {

}

interface MyInterface {

}

trait MyTrait {

}

$obj = new class(1, 2, 3) extends MyClass implements MyInterface {
    use MyTrait;
    public function __construct(
        public int $x, public int $y, public int $z
    )
    {
    }
};

dump($obj);


$obj = new class(1, 2, 3) {
    public function __construct(
        public int $x, public int $y, public int $z
    )
    {
    }
};

dump(get_class($obj));
*/


$obj = new class(1, 2, 3) implements MyInterface {
    public function __construct(
        public int $x, public int $y, public int $z
    )
    {
    }
};


foo($obj);

function foo(MyInterface $obj) {
    var_dump($obj);
}