<?php

function menorMayor($a, $b) {
    if ($a>$b)
        return -1;
    elseif ($a<$b)
        return 1;
    else
        return 0;
}

$datos = array('f' => 4, 'g' => 8, 'a' => 1, 'b' => -10);
uasort($datos, 'menorMayor');

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