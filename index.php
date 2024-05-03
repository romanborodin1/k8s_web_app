<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 23</title>
</head>
<body> 
    <?php
        $char = "c++";
        switch($char) {
            case 'php':    // После ':' - блок кода для этого случая
                ?>
                <h1>Язык PHP</h1>
                <?php
                break;    // Чтобы указать, что наш случай завершился
            case 'c#':
                ?>
                <h1>Язык C#</h1>
                <?php
                break;
            case 'js':
                ?>
                <h1>Язык JavaScript</h1>
                <?php
                break;
            default:
                ?>
                <h1>Неизвестный язык</h1>
                <?php
                break;
        }

        $num = 120;
        if ($num > 0 && $num <= 10) {
            echo "0 < $num <= 10 <br>";
        } elseif ($num > 10 && $num <= 100) {
            echo "10 < $num <= 100 <br>";
        } elseif ($num > 100 && $num <= 1000) {
            echo "100 < $num <= 1000 <br>";
        } else {
            echo "$num < 0 || $num > 1000 <br>";
        }

        switch (true) {    // Будем проверять на первую истину
            case ($num > 0 && $num <= 10):
                echo "0 < $num <= 10 <br>";
                break;
            case ($num > 10 && $num <= 100):
                echo "10 < $num <= 100 <br>";
                break;
            case ($num > 100 && $num <= 1000):
                echo "100 < $num <= 1000 <br>";
                break;
            default:
                echo "$num < 0 || $num > 1000 <br>";
                break;
        }
    ?>
</body>
</html>
