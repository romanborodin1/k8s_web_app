<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 8</title>
</head>
<body> 
    <?php
        $user = "Иван";
        // $user;
        if(isset($user))    // Проверяем, существует ли переменная
            echo "Переменная существует";
        else
            echo "Переменная не существует";
        echo "<br/>";

        $str = "";
	if(empty($user))    // Проверяем, пустая ли переменная строкового типа
            echo "Строка пустая";
        else
            echo "В строке что-то есть";
        echo "<br/>";

        echo gettype(123);    // Узнаём тип переменной
        echo "<br/>";
        echo gettype(1.23);    // Узнаём тип переменной
        echo "<br/>";
        echo gettype("123");    // Узнаём тип переменной
        echo "<br/>";
        echo gettype(true);    // Узнаём тип переменной
        echo "<br/>";

	echo is_int(123);    // Проверяем, является ли значение целочисленным
        // В PHP есть много функций проверки типов данных. Они начинаются на is_. Примеры: is_int(), is_array() и так далее 
        echo "<br/>";
        
    ?>
</body>
</html>
