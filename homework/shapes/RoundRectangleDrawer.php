<?php
require_once("RectangleDrawer.php");
class RoundRectangleDrawer extends RectangleDrawer
{
    public $radius;
    public function __construct($x, $y, $color, $width, $height, $radius)
    {
        parent::__construct($x, $y, $color, $width, $height);
        $this->radius = $radius;
    }
    public function draw()
    {
        echo "Малюємо round прямокутник: параметри: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . " " . $this->radius . "\n";
        echo "<div style=\"position: absolute;left: {$this->x}px;top: {$this->y}px;width:{$this->width}px;height:{$this->height}px;background-color:{$this->color};border-radius:{$this->radius}px\"></div>";
    }
}
