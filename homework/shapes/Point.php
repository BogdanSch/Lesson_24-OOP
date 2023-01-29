<?php
require_once "Shape.php";
class Point extends Shape
{
    private $d = 2;
    public function __construct($x, $y) {
        parent::__construct($x, $y);
    }
    public function draw()
    {
        echo "Малюємо point: параметри: " . $this->x . " " . $this->y . " " . $this->d . " " . $this->d . "\n";
    }
}
