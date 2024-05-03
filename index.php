<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 21</title>
</head>
<body> 
    <?php
        $num = 9;
        if ($num > 0 && $num < 8) {
            echo "0<{$num}<8<br/>";
        }
        if ($num > 0 || $num < 8) {
            echo "Условие отработало<br/>";
        }
        if (!($num < 0)) {
            echo "Условие отработало<br/>";
        }
        // $f = true;
        $f = $num > 0;
        if ($f) {
            echo "Условие отработало<br/>";
        }
    ?>
</body>
</html>
