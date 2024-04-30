<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 17</title>
</head>
<body> 
    <?php
        echo 4 ** 2;    // Возведение в степень
        echo "<br/>";
	echo 8 % 3;    // Деление по модулю
	echo "<br/>";
        $var = 10;
	echo ++$var;     // Инкремент - увеличение на 1
        echo "<br/>";
        echo $var;    // Декремент - уменьшение на 1
        echo "<br/>";
	echo --$var;    // Декремент - уменьшение на 1
        echo "<br/>";
        echo $var--;
        echo "<br/>";
	echo $var;
        echo "<br/>";
	echo 8 / 3;    // 2.6666666666667
        echo "<br/>";
	echo (int) (8 / 3);    // Целочисленное деление
        echo "<br/>";

        // Алгоритм определения четности числа:
        $num = 8;
	if ($num % 2) echo "Число НЕчетное<br/>";
        else echo "Число четное<br/>";

	// Сокращенные записи арифметических операций:
	$num = 10;
	$var = 2;
        $num .= $var;    // $num = $num . $var;
        $num += $var;    // $num = $num + $var;
        $num -= $var;    // $num = $num - $var;
        $num *= $var;    // $num = $num * $var;
        $num /= $var;    // $num = $num / $var;
        $num %= $var;    // $num = $num % $var;
        $num **= $var;    // $num = $num ** $var;
        $num++;    // $num = $num + 1;
        $num--;    // $num = $num - 1;

        echo 16 ** 0.5;    // Заменяет функции sqrt() и pow();
        echo "<br/>";

        // Инкремент и декремент
	$var = 3;
        echo ++$var;    // Префиксная запись - сначала увеличивает, потом возвращает значение переменной
        echo "<br/>";
        echo $var;
        echo "<br/>";
        echo $var++;    // Постфиксная запись - сначала возвращает значение пемеренной, а только потом её увеличивает
        echo "<br/>";
        echo $var; 
    ?>
</body>
</html>
