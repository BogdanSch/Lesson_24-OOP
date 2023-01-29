<?php
require_once "HasHome.php";
require_once "Animal.php";

class Dog extends Animal implements HasHome {

	public function __construct($name) {
		parent::__construct($name);
	}

	public function say() {
		echo "woof-woof!";
	}

    public function home()
    {
        echo "The big red house";
    }
}