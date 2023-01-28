<?php
require_once "autoload.php";

class Student extends Citizen
{
    public $average_mark;
    public $school;
    public function __construct($name, $age, $city,$average_mark, $school) {
        parent::__construct($name, $age, $city);
    	$this->average_mark = $average_mark;
    	$this->school = $school;
    }
    public function get_info()
    {
        $str = parent::get_info();
        return $str . " " . $this->school . " " . $this->average_mark;
    }
}