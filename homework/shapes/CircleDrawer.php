<?php

require_once "Shape.php";

class CircleDrawer extends Shape
{
    protected $radius;

    public function __construct($x, $y, $color, $radius)
    {
        parent::__construct($x, $y, $color);
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "Малюємо коло: параметри: " . $this->x . " " . $this->y . " " . $this->radius . "\n";
        echo "<div style=\"position: absolute;left: {$this->x}px;top: {$this->y}px;width:{$this->radius}px;height:{$this->radius}px;background-color:{$this->color};border-radius: 50px;\"></div>";
    }
}