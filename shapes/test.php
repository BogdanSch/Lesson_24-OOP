<?php
include "autoload.php";

$rect1 = new RectangleDrawer(1, 2, 3, 4);
$rect2 = new RectangleDrawer(5, 6, 7, 8);
$circle3 = new CircleDrawer(15, 16, 3);
$circle4 = new CircleDrawer(25, 26, 6);
$arr = [$rect1, $rect2, $circle3, $circle4];

foreach ($arr as $value) {
    if ($value instanceof Shape) {
        echo $value->draw();
    }
}