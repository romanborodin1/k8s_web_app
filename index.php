<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 6</title>
</head>
<body> 
<?php
        // integers
        $num = 1234;
        $num = -12;
        $num = 012;    // Число в восьмеричной системе счисления
        $num = 0x12A;    // Число в шестнатиричной системе счисления
        echo 07 + 03;    // 012, 10. Выведет в 10-тичной
        echo "<br/>";
	echo 0xA + 0xF;    // 25
        echo "<br/>";

        // floats
        $var = 1.23456;
        $var = 1.23456e-3;    // Экспоненциальная запись. 1.23456 * 10^(-3)
        echo $var;
        echo "<br/>"; 
        $var = 1.23456e+3;
        echo $var;
    ?>
</body>
</html>
