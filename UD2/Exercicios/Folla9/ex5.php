<?php

$puntos = array("Ana" => 123, "Belén" => 14, "Felipe" => 3, "Moncho" => 245, "Artur" => 10);

function menorMayor ($a, $b) {
    if ($a < $b) {
        return -1;
    } elseif ($a > $b) {
        return 1;
    } else {
        return 0;
    }
}

function mayorMenor ($a, $b) {
    if ($a > $b) {
        return -1;
    } elseif ($a < $b) {
        return 1;
    } else {
        return 0;
    }
}

function compararClaves($a, $b) {
    return strcmp($a, $b);
}

function compararClavesLong($a, $b) {
    if (strlen($a) < strlen($b)) {
        return -1;
    } elseif (strlen($a) > strlen($b)) {
        return 1;
    } else {
        return 0;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ordenar_alfabeticamente'])) {
        uksort($puntos, 'compararClaves');
    } elseif (isset($_POST['ordenar_menor_mayor'])) {
        uasort($puntos, 'menorMayor');
    } elseif (isset($_POST['ordenar_mayor_menor'])) {
        uasort($puntos, 'mayorMenor');
    } elseif (isset($_POST['ordenar_longitud_clave'])) {
        uksort($puntos, 'compararClavesLong');
        $puntos = array_reverse($puntos);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elige una opción</h1>
    <div>
        <form method="post">

            <button type="submit" name="ordenar_alfabeticamente">Ordenar por Clave Alfabéticamente</button>
            <button type="submit" name="ordenar_menor_mayor">Ordenar por puntos menor a mayor</button>
            <button type="submit" name="ordenar_mayor_menor">Ordenar por puntos de mayor a menor</button>
            <button type="submit" name="ordenar_longitud_clave">Ordenar por Longitud de Clave</button>
        </form>
    </div>
    <h2>Resultado:</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Puntos</th>
        </tr>
        <?php
        foreach ($puntos as $nombre => $punto) {
            echo "<tr><td>$nombre</td><td>$punto</td></tr>";
        }
        ?>
    </table>
</body>
</html>