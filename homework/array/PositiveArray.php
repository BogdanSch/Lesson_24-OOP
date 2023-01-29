<?php

class PositiveArray
{
    public $array;
    public function __construct($array) {
    	$this->array = $array;
    }
    public function __toString()
    {
        return "[".implode(", ", $this->array)."]";
    }
}

$obj = new PositiveArray([1, 4, 5, 32, 7]);
echo $obj;