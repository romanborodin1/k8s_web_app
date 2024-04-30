<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 16</title>
</head>
<body> 
    <?php
        $num = 7;
	echo "Выводим на экран число: " . $num . ". Другой текст<br/>";    // Оператор '.' конкатенирует строки
        // $num = $num . '+5'; 
        $num .= '+5';    // То же самое 
        echo "Выводим на экран число: " . $num . ". Другой текст<br/>";    // Оператор '.' конкатенирует строки  
        echo "Выводим на экран число: ", $num, ". Другой текст<br/>";    // Оператор '.' конкатенирует строки  
    ?>
</body>
</html>
