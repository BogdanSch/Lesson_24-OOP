<?php

require_once "Shape.php";

class RectangleDrawer extends Shape
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;
    }

    public function draw()
    {
        echo "Малюємо прямокутник: параметри: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . "\n";
    }
}

// $rect1 = new RectangleDrawer(1, 2, 3, 4);
// $rect1->draw();