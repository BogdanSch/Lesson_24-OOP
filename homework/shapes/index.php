<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <?php
    require_once "autoload.php";

    $rect1 = new RectangleDrawer(1, 200, "black", 200, 400);
    $rect2 = new RectangleDrawer(5, 200, "red", 7, 8);
    $rect2 = new RoundRectangleDrawer(5, 200, "blue", 250, 300, 10);
    $circle3 = new CircleDrawer(15, 200, "green", 300);
    $circle4 = new CircleDrawer(25, 200, "black", 100);
    $point1 = new Point(10, 200, "yellow");
    $arr = [$rect1, $rect2, $circle3, $circle4, $point1];

    $x = 0;
    $y = 0;
    foreach ($arr as $shape) {
        if ($shape instanceof Shape) {
            $shape->move($x, $y);
            echo $shape->draw();
            $x += 300;
            $y += 50;
        }
    } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>