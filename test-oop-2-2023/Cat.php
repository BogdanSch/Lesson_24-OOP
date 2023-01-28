<?php

class Cat
{
    protected $age;

    public function __construct($age = 0)
    {
        $this->age = $age;
    }

    public function addAge($age=1)
    {
        $this->age += $age;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    function foo(Cat $obj) {
        echo $obj->age;
    }
}

// $cat = new Cat();
// $cat->addAge(3);
// echo $cat->getAge();