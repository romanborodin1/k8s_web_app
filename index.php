<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 13</title>
</head>
<body> 
    <?php
        require 'point.php';

        $first_point = new Point;
        $first_point->x = 3;
	$first_point->y = 3;

	$second_point = clone $first_point;    // Клонировать объект, а не сделать ссылку на него
        $second_point->x = 5;
        $second_point->y = 5;

	echo "x: {$first_point->x}, y: {$first_point->y}<br/>";
        echo "<br/>";
	echo "x: {$second_point->x}, y: {$second_point->y}<br/>";

        echo pow(2, 8);     // 2^8
        echo "<br/>";
        echo sqrt(16);     // Корень квадратный из 16
	echo "<br/>";

        $p1 = new Point;
        $p1->x = 10;
        $p1->y = 34;

        $p2 = new Point;
        $p2->x = 3;
	$p2->y = 10;

	$distance = sqrt((pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y), 2)));
        echo $distance;
    ?>
</body>
</html>
