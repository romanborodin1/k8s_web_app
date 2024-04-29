<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 14</title>
</head>
<body> 
    <?php
        define('NUMBER', 1);    // Принято задавать константы БОЛЬШИМИ буквами. 2-й аргумент - значение. Тут могут быть только числа, строки массивы
        echo NUMBER;
        echo "<br/>";

        define('OTHER', 11);
        if (!define('OTHER', 33)) {
            echo "[WARN] Не удалось создать константу OTHER";
        } else {
            echo "[INFO] Константа OTHER успешно создана и имеет значение " . OTHER;
        }
        echo "<br/>";
        if (defined('OTHER')) {    // Проверить, задана ли уже константа
            echo "[INFO] Константа OTHER уже создана";
        }
        echo "<br/>";

        echo constant('OTHER');    // Данная функция позволяет задавать динамическое имя константы
        echo "<br/>";
	$num = mt_rand(1, 10);
	$name = "VALUE($num)";
        define($name, $num);
	echo "[INFO] Constant {$name} = " . constant($name) . "<br/>";

        // Пример стандартных констант:
	echo "[INFO] Filename: " . __FILE__ . "<br/>";
        echo "[INFO] String: " . __LINE__ . "<br/>";
    ?>
</body>
</html>
