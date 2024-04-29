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
	echo Point::$num;    // Обращение к статической переменной
        echo "<br/>";

        $first = $second = 2;
        $first = 3;
	echo $first . '<br/>' . $second;
	echo "<br/>";

        $first_point = new Point;
        $first_point->x = 3;
	$first_point->y = 3;

	$second_point = $first_point;
        $second_point->x = 5;
        $second_point->y = 5;

        echo "x: {$first_point->x}, y: {$first_point->y}<br/>";
	echo "x: {$second_point->x}, y: {$second_point->y}<br/>";

        $num1 = 5;
        $num2 = &$num1;    // Указываем ссылку на объект, который хранится в переменной $num1
        $num2 = 333;
	echo "num1: {$num1}<br/>";    // 333
        
    ?>
</body>
</html>
