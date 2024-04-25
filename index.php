<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title><?= "new page"; ?></title>
</head>
<body>
    <h1>Test page</h1>
    <p>Test paragraph</p>
    <?php
        echo "<p>Текущая дата и время:</p>";
        echo date(DATE_RSS);
    ?>
    <p>Test paragraph2</p>
    <?php
        echo 9
        +
        10
        -4
        ;
        echo "<br/>TEXT<br/>";
    ?>
    <?php
    if (mt_rand(0,1)){
        ?>
        <div style="color: blue">Сининй текст</div>
        <?php
    } else {
        ?>
        <div style="color: red">Красный текст</div>
        <?php
    }
    ?>
</body>
</html>
