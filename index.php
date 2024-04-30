<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 15</title>
</head>
<body> 
    <?php
        echo "Путь к файлу: " . __DIR__ . '<br/>';    // Путь к каталогу с файлом
        // require_once 'point.php';    // Подключить файл только 1 раз
        require_once __DIR__ . "/point.php";    // Подключить файл только 1 раз
        $p1 = new Point;
        $p1->x = 10;
        $p1->y = 34;

        $p2 = new Point;
        $p2->x = 3;
        $p2->y = 10;

        $distance = sqrt((pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y), 2)));
	echo $distance . "<br/>";

        class ConstClass {
            const NAME = "str";    // Так задаются константы внутри класса. Здесь могут быть числа, массивы, строки, логические значения
	}
        if (defined('ConstClass::NAME')) {    // Указываем через '::'!
            echo "Константа определена";
	} else {
            echo "Константа НЕ определена";
        }
    ?>
</body>
</html>
