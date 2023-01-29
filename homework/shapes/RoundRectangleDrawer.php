<?php
require_once("RectangleDrawer.php");
class RoundRectangleDrawer extends RectangleDrawer
{
    public $radius;
    public function __construct($x, $y, $width, $height, $radius)
    {
        parent::__construct($x, $y, $width, $height);
        $this->radius = $radius;
    }
    public function draw()
    {
        echo "Малюємо прямокутник: параметри: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . " " . $this->radius . "\n";
    }
}
