<?php
include "autoload.php";

$arr= [new Dog("Jack"), new Dog("Box"), new Cat("Lusi"), new Cat("Mina")];

foreach ($arr as $value) {
	if ($value instanceof Animal){
		print($value->getName()." say:\n");
		print($value->say()."\n");
        print($value->home()."\n");
	}
}