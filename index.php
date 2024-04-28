<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 7</title>
</head>
<body> 
    <?php
        // Booleans
        $bool_var = true;    // Можно в любом регистре - TRUE, True, TrUe и т.д.. Но лучше писать в нижнем регистре
        $bool_var = false;   // Тоже - лучше в нижнем регистре 

	// Strings
        $str_var = "Hello world! '12345'";    // Можно использовать двойные (""), одиночные кавычки ('') и обратные (``)
        echo $str_var;
        echo "<br/>";
        $some_var = 5;
        echo "Some var = $some_var";
        echo "<br/>";
	echo "Some var = \$some_var";    // Экранируем знак $ для буквального его вывода на экран
        echo "<br/>";
	echo "Some var = \"$some_var\"";    // Двойные кавычки тоже можно экранировать
        echo "<br/>";
	echo "Some var = {$some_var}7";    // Фигурные скобки 
        echo "<br/>";
	echo `ls`;    // Команды операционной системы
    ?>
</body>
</html>
