<?php
include "Cat.php";

class MyCat extends Cat
{
    protected $name;

    public function __construct($name = "", $age = 1)
    {
        parent::__construct($age);
        $this->name = $name;
    }

    public function sleep()
    {
        echo "\nZzzzz...\n";
    }

    public function foo(Cat $obj)
    {
        parent::foo($obj);
        echo $obj->name;
    }
}

$my_cat = new MyCat("kitty", 5);

echo $my_cat->getAge();
$my_cat->sleep();

$my_cat->foo(new MyCat("Sam", 8));