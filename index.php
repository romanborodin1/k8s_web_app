<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Урок 4</title>
</head>
<body> 
    <?php
        echo "Главный скрипт<br/>";
        include 'second.php';       // В случае с include при отсутствии скрипта будет выведено предупреждение
        // require 'second.php';    // В случае с require при отсутствии скрипта будет поднято исключение 
        echo "Главный скрипт<br/>";
    ?>
</body>
</html>
