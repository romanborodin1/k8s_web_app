<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 10</title>
</head>
<body> 
    <?php
    $tests = array(
        "42",
	1337,
	0x539,
        02471,
        0b10100111001,
        1337e0,
        "0x539",
        "0b10100111001",
        "1337e0",
        "not numeric",
        array(),
        9.1,
        null
    );

    foreach ($tests as $element) {
        if (is_numeric($element)) {    // Проверяем, является ли значение переменной числом
            echo var_export($element, true) . " - число<br/>", PHP_EOL;
	} else {
            echo var_export($element, true) . " - НЕ число<br/>", PHP_EOL;
	}         
    }

    echo "<br/>";
    $var = 21.2784562923479;
    echo round($var, 2);    // Округляем
    echo "<br/>";
    echo ceil($var);    // Округляем вверх
    echo "<br/>";
    echo floor($var);    // Округляем вниз

    echo "<br/>";
    echo decbin(7);    // Привести из десятичной системы счисления в двоичную. Возвращает string
    ?>
</body>
</html>
