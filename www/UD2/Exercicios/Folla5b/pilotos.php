<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }

        #div-table {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Fórmula 1</h1>
    <?php
        $pilotos = array(
            "Hamilton" => array("Australia" => 2, "Baréin" => 3, "China" => 4, "Azerbaiyán" => 1, "España" => 1, "Mónaco" => 3, "Canadá" => 5), "Vettel" => array("Australia" => 1, "Baréin" => 1, "China" => 8, "Azerbaiyán" => 4, "España" => 4, "Mónaco" => 2, "Canadá" => 1),
            "Raikkonen" => array("Australia" => 3, "Baréin" => NULL, "China" => 3, "Azerbaiyán" => 2, "España" => NULL, "Mónaco" => 4, "Canadá" => 6),
            "Verstappen" => array("Australia" => 6, "Baréin" => NULL, "China" => 5, "Azerbaiyán" => NULL, "España" => 3, "Mónaco" => 9, "Canadá" => 3),
            "Bottas" => array("Australia" => 8, "Baréin" => 2, "China" => 2, "Azerbaiyán" => 14, "España" => 2, "Mónaco" => 5, "Canadá" => 2),
        );

        $posiciones_puntos = array(1 => 25, 2 => 18, 3 => 15, 4 => 5, 5 => 4, 6 => 3, 7 => 2, 8 => 1);

        if (isset($_GET["piloto"])) {
            $piloto = $_GET["piloto"];
            if (array_key_exists($piloto, $pilotos)) {
                echo "<h2>Clasificación de ". $piloto ."</h2>";
            } else {
                echo "<p>No se ha encontrado el piloto</p>";
            }
        }
    ?>
    <div id="div-table">
        <table>
            <thead>
                <th>Gran Premio</th>
                <th>Posición</th>
                <th>Puntos</th>
            </thead>
            <tbody>
                <?php
                    if (isset($piloto)) {
                        foreach ($pilotos[$piloto] as $gran_premio => $posicion) {
                            if ($posicion != NULL) {
                                echo "<tr>";
                                echo "<td>". $gran_premio ."</td>";
                                echo "<td>". $posicion ."</td>";
                                if ($posicion <= 8) {
                                    echo "<td>". $posiciones_puntos[$posicion] ."</td>";
                                } else {
                                    echo "<td></td>";
                                }
                                echo "</tr>";
                            } else {
                                echo "<tr>";
                                echo "<td>". $gran_premio ."</td>";
                                echo "<td>Abandono</td>";
                                echo "<td></td>";
                                echo "</tr>";
                            }
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php
        if (isset($piloto)) {
            $puntos_totales = 0;
            foreach ($pilotos[$piloto] as $gran_premio => $posicion) {
                if ($posicion != NULL && $posicion <= 8) {
                    $puntos_totales += $posiciones_puntos[$posicion];
                }
            }
            echo "<p>Puntos totales: ". $puntos_totales ."</p>";
        }
    ?>
</body>
</html>