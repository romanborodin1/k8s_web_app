<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 11</title>
</head>
<body> 
    <?php
        require 'point.php';
        $point1 = new Point;
        $point1->x = 13;
        $point1->y = 2;
        echo $point1->x;
        echo "<br/>";

        $point2 = new Point();    // Можно создавать объект класса с круглыми скобками и без них
        $point2->x = 11;
        $point2->y = 47;
	echo $point2->x;
        echo "<br/>";

	unset($point2);    // Удаляем объект класса Point, на который указывает переменная point2
        echo $point2->x;
    ?>
</body>
</html>
