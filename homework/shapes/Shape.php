<?php
abstract class Shape
{
    protected $x;
    protected $y;
    protected $color;

    public function __construct($x = 0, $y = 0, $color = "black")
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }
    public abstract function draw();
    public function move($x, $y){
        $this->x += $x;
        $this->y += $y;
    }
}