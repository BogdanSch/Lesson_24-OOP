<?php

class Human
{
    public $name;
    public $age;
    public function __construct($name, $age) {
    	$this->name = $name;
    	$this->age = $age;
    }
    public function get_info()
    {
        return $this->name . " " . $this->age;
    }
}
