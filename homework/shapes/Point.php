<?php
require_once "Shape.php";
class Point extends Shape
{
    private $d = 20;
    public function __construct($x, $y, $color) {
        parent::__construct($x, $y, $color);
    }
    public function draw()
    {
        echo "Малюємо point: параметри: " . $this->x . " " . $this->y . " " . $this->d . " " . $this->d . "\n";
        echo "<div style=\"position: absolute;left: {$this->x}px;top: {$this->y}px;width:{$this->d}px;height:{$this->d}px;background-color:{$this->color};border-radius: 50px;\"></div>";
    }
}
