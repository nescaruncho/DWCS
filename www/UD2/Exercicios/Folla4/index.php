<?php
// Creación del array
$viajes = [
    ["Madrid", "Segovia", 90201],
    ["Madrid", "A Coruña", 596887],
    ["Barcelona", "Cádiz", 1152669],
    ["Bilbao", "Valencia", 622233],
    ["Sevilla", "Santander", 832067],
    ["Oviedo", "Badajoz", 682429]
];
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de viajes</title>
    <style>
        html {
            font-family: Verdana;
            background-color: #2596be;
            color: white;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        table {
            border-collapse: collapse;
            width: 60vw;
            text-align: center;
        }
        thead{
            background-color: black;
            border: solid black 1px;
            height: 10vh;
        }
        td {
            border: solid black 1px;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
    <h1>Lista de viajes</h1>
    <table>
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Distancia(km)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($viajes as $viaje) {
                $distancia_km = $viaje[2] / 1000; // Convertir metros a kilómetros
                echo "<tr>";
                echo "<td>{$viaje[0]}</td>";
                echo "<td>{$viaje[1]}</td>";
                echo "<td>" . number_format($distancia_km, 2) . " km</td>"; // Formatear a 2 decimales
                echo "</tr>";
            }
            
            ?>
        </tbody>
    </table>
</body>

</html>