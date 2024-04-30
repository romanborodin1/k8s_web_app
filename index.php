<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 18</title>
</head>
<body> 
    <?php
        echo 6 & 10;    // [AND]: 0b0110 & 0b1010 = 0b0010 = 2
        echo '<br/>';
        echo 6 | 10;    // [OR]: 0b0110 | 0b1010 = 0b1110 = 14
        echo '<br/>';
        echo 6 ^ 10;    // [XOR]: 0b0110 ^ 0b1010 = 0b1100 = 12
        echo '<br/>';
        echo ~6;        // [NOT]: ~0b0110 = -7 ???
        echo '<br/>';
        echo 6 << 1;    // [Побитовый сдвиг влево]: 0b0110 << 1 = 0b1100 = 12
        echo '<br/>';
        echo 6 >> 1;    // [Побитовый сдвиг вправо]: 0b0110 >> 1 = 0b0011 = 3
        echo '<br/>';

        // Сокращенные записи:
        $num = 6;
        $var = 10;
	$num &= $var;
        $num |= $var;
        $num ^= $var;
        $num <<= $var;
        $num >>= $var; 
    ?>
</body>
</html>
