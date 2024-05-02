<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 20</title>
</head>
<body> 
    <?php
        if (true) {    // Здесь должно быть boolean значение. Если оно будет в неявном виде, то будет выполнено приведение к булевому типу
	    echo "Истина<br/>";
        } else {
	    echo "Ложь<br/>";  
	}

        if (true) {
	    echo "Истина<br/>";
	}

        if (true)    // Если фигурных скобок нет, то ПЕРВАЯ строка после if будет считаться телом if. НО ЛУЧШЕ ВСЕГДА ИСПОЛЬЗОВАТЬ ФИГУРНЫЕ СКОБКИ!!!
	    echo "Истина<br/>";

	$x = 10;
	if (!is_numeric($x)) {
            echo "[WARN] x = {$x} - is not numeric!";
        } elseif ($x == 0) {
            echo "x = {$x} == 0<br/>";
        } elseif ($x < 0) {
            echo "x = {$x} < 0<br/>";
        } else {
            echo "x = {$x} > 0<br/>";
	}

	if (!is_numeric($x)) {
        ?>
	    <h1>x is not numeric!</h1>
        <?php
        } elseif ($x == 0) {
        ?>
            <h1>x == 0</h1>
        <?php
        } elseif ($x < 0) {
        ?>
            <h1>x < 0</h1>
        <?php
        } else {
        ?>
            <h1>x > 0</h1>
        <?php
	}       
    ?>
</body>
</html>
