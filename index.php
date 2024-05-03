<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 22</title>
</head>
<body> 
    <?php
        $x = -450;
        $x = $x < 0 ? -$x : $x;
        echo $x . '<br>';

        // Оператор ?? - проинициализировать переменную ТОЛЬКО в том случае, если она не была ранее проинициализирована
        $y = '100';    // null - переменная НЕинициализирована
        $y = $y ?? 1;
        echo "{$y}<br>";

        // Оператор goto - переход на метку в коде. 
        // НЕ РЕКОМЕНДУЕТСЯ ЕГО ИСПОЛЬЗОВАТЬ!!! 
        // Лучше использовать if-else и циклы
        $n = 0;
        echo "[1] n = {$n}<br>";
        finish:    // Метка
        echo "[_] n = {$n}<br>";

        $n++;
        if ($n > 6) {
            goto end;
        }
        goto finish;    // Переход на метку
        end:
    ?>
</body>
</html>
