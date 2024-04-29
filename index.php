<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 9</title>
</head>
<body> 
    <?php
        $str = '45.2';
        $number = $str - 12;    // Пример неявного приведения типов
        echo $number;    // 33.2
        echo '<br/>';

        $str = '45.2_some_text_here_123';
        $number = $str - 12;    // Пример неявного приведения типов
        echo $number;    // 33.2. Всё текстового он отбросил
        echo '<br/>';

        // $var = 0.0;    // -> false
        // $var = 0;    // -> false
        // $var = "0";    // -> false
        if ($var) {
            echo "Переменная $var рассматривается как true";    // Приведение к строковмоу типу
        } else {
            echo "Переменная $var рассматривается как false";
        }
        echo '<br/>';

        echo true;    // -> 1
        echo '<br/>';
        echo false;    // -> ""
        echo '<br/>';

        // Явное приведение типов:
        $float = 4.3;
        $number = (int)$float;    // Интерпретатор отбрасывает дробную часть и переводит вещесвтенное число в целое
        echo $number;
        echo '<br/>';
        $num = 21;
	$f = (float)($num/2) - (int)($num/2);    // Если будет 0, то число будет чётное
        echo $f;
    ?>
</body>
</html>
