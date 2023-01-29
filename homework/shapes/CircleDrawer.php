<?php

require_once "Shape.php";

class CircleDrawer extends Shape
{
    protected $radius;

    public function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "Малюємо коло: параметри: " . $this->x . " " . $this->y . " " . $this->radius . "\n";
    }
}

// $rect1 = new CircleDrawer(15, 16, 3);
// $rect1->draw();