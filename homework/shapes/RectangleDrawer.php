<?php

require_once "Shape.php";

class RectangleDrawer extends Shape
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $color, $width, $height)
    {
        parent::__construct($x, $y, $color);
        $this->width = $width;
        $this->height = $height;
    }
    public function draw()
    {
        echo "Малюємо прямокутник: параметри: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . "\n";
        echo "<div style=\"position: absolute;left: {$this->x}px;top: {$this->y}px;width:{$this->width}px;height:{$this->height}px;background-color:{$this->color};\"></div>";
    }
}

// $rect1 = new RectangleDrawer(1, 2, 3, 4);
// $rect1->draw();