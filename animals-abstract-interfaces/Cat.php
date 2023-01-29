<?php
require_once "HasHome.php";
require_once "Animal.php";

class Cat extends Animal implements HasHome
{

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        echo "meow-meow";
    }

    public function home()
    {
        echo "The big blue house";
    }
}
// $lusi= new Cat("Lusi");

// $lusi->say();
// //$lusi->home();