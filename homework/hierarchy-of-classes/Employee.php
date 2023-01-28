<?php

class Employee extends Citizen
{
    public $company;
    public $state;
    public function __construct($name, $age, $city, $company, $state) {
        parent::__construct($name, $age, $city);
    	$this->company = $company;
    	$this->state = $state;
    }
    public function get_info()
    {
        $str = parent::get_info();
        return $str . " " . $this->company . " " . $this->state;
    }
}
