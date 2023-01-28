<?php
require_once "autoload.php";

class Citizen extends Human
{
    public $city;
    public function __construct($name, $age,$city) {
        parent::__construct($name, $age);
    	$this->city = $city;
    }
    public function get_info()
    {
        $base = parent::get_info();
        return $base . " ".$this->city;
    }
}