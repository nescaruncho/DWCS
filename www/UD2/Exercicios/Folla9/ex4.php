<?php

function compararClaves($a, $b) {
    return strcmp($b, $a);
}

$datos = array('f' => 4, 'g' => 8, 'a' => 1, 'b' => -10);
uksort($datos, 'compararClaves');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos</h1>
    <ul>
        <?php foreach ($datos as $clave => $valor) : ?>
            <li><?= $clave ?>: <?= $valor ?></li>
        <?php endforeach; ?>
</body>
</html>