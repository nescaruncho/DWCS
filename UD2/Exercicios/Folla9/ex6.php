<?php

$viajes = [
    "viaje1" => [
        "origen" => "Madrid",
        "destino" => "Segovia",
        "distancia" => 90201,
    ],
    "viaje2" => [
        "origen" => "Madrid",
        "destino" => "A Coruña",
        "distancia" => 596887,
    ],
    "viaje3" => [
        "origen" => "Barcelona",
        "destino" => "Cádiz",
        "distancia" => 1152669,
    ],
    "viaje4" => [
        "origen" => "Bilbao",
        "destino" => "Valencia",
        "distancia" => 622233,
    ],
    "viaje5" => [
        "origen" => "Sevilla",
        "destino" => "Santander",
        "distancia" => 832067,
    ],
    "viaje6" => [
        "origen" => "Oviedo",
        "destino" => "Badajoz",
        "distancia" => 682429,
    ],
];

function ordenarAlfabeticamenteOrigen($a, $b) {
    return strcmp($a["origen"], $b["origen"]);
}

function ordenarAlfOrigenInverso($a, $b) {
    return strcmp($b["origen"], $a["origen"]);
}

function ordenarAlfabeticamenteDestino($a, $b) {
    return strcmp($a["destino"], $b["destino"]);
}

function ordenarAlfDestinoInverso($a, $b) {
    return strcmp($b["destino"], $a["destino"]);
}

function ordenarDistanciaMenorMayor($a, $b) {
    if ($a["distancia"] < $b["distancia"]) {
        return -1;
    } elseif ($a["distancia"] > $b["distancia"]) {
        return 1;
    } else {
        return 0;
    }
}

function ordenarDistanciaMayorMenor($a, $b) {
    if ($a["distancia"] > $b["distancia"]) {
        return -1;
    } elseif ($a["distancia"] < $b["distancia"]) {
        return 1;
    } else {
        return 0;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ordenar_alfabeticamente_origen'])) {
        uasort($viajes, 'ordenarAlfabeticamenteOrigen');
    } elseif (isset($_POST['ordenar_alfabeticamente_origen_inverso'])) {
        uasort($viajes, 'ordenarAlfOrigenInverso');
    } elseif (isset($_POST['ordenar_alfabeticamente_destino'])) {
        uasort($viajes, 'ordenarAlfabeticamenteDestino');
    } elseif (isset($_POST['ordenar_alfabeticamente_destino_inverso'])) {
        uasort($viajes, 'ordenarAlfDestinoInverso');
    } elseif (isset($_POST['ordenar_distancia_menor_mayor'])) {
        uasort($viajes, 'ordenarDistanciaMenorMayor');
    } elseif (isset($_POST['ordenar_distancia_mayor_menor'])) {
        uasort($viajes, 'ordenarDistanciaMayorMenor');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f0e68c;
            font-family: 'Courier New', Courier, monospace;
            color: #000080;
        }

        h1 {
            text-align: center;
            color: #ff4500;
            text-shadow: 2px 2px #ffa500;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        button {
            background-color: #ff4500;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            font-size: 16px;
            font-family: 'Courier New', Courier, monospace;
        }

        button:hover {
            background-color: #ffa500;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fffacd;
        }

        th, td {
            border: 1px solid #000080;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ff4500;
            color: #fff;
        }

        td {
            background-color: #fffacd;
        }
    </style>
</head>
<body>
    <h1>Ordenación de viajes</h1>
    <form action="ex6.php" method="post">
        <button type="submit" name="ordenar_alfabeticamente_origen">Ordenar alfabéticamente por origen</button>
        <button type="submit" name="ordenar_alfabeticamente_origen_inverso">Ordenar alfabéticamente por origen (inverso)</button>
        <button type="submit" name="ordenar_alfabeticamente_destino">Ordenar alfabéticamente por destino</button>
        <button type="submit" name="ordenar_alfabeticamente_destino_inverso">Ordenar alfabéticamente por destino (inverso)</button>
        <button type="submit" name="ordenar_distancia_menor_mayor">Ordenar por distancia (menor a mayor)</button>
        <button type="submit" name="ordenar_distancia_mayor_menor">Ordenar por distancia (mayor a menor)</button>
    </form>
    <table>
        <thead>
            <th>Origen</th>
            <th>Destino</th>
            <th>Distancia (en metros)</th>
        </thead>
        <tbody>
            <?php foreach ($viajes as $viaje) : ?>
                <tr>
                    <td><?= $viaje["origen"] ?></td>
                    <td><?= $viaje["destino"] ?></td>
                    <td><?= $viaje["distancia"] ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>