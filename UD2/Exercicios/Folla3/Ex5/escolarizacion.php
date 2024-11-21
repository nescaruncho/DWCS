<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Porcentaje escolarización</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                display: flex;
                justify-content: center;
            }
            table {
                border-collapse: collapse;
                width: 70%;
            }
            thead {
                background-color: black;
                color: white;
            }
            th {
                border: 1px solid black;
                padding: 5px;
            }
            td {
                border: 1px solid black;
                padding: 5px;
            }
            tbody tr:nth-child(even) {
                background-color: #e0e0e0; /* Cambia el color según tu preferencia */
            }
            td:nth-child(2), 
            td:nth-child(3) {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Comunidad</th>
                    <th>Escolarización por 1000 habitantes</th>
                    <th>%escolarización</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $escolarizacion = array(
                    'Andalucía' => 593.6,
                    'Aragón' => 600.3,
                    'Asturias' => 582.9,
                    'Baleares' => 489.7,
                    'Canarias' => 573.2,
                    'Cantabria' => 551.5,
                    'Castilla y León' => 645.3,
                    'Castilla la Mancha' => 555.8,
                    'Cataluña' => 568.3,
                    'Comunidad Valenciana' => 561.1,
                    'Extremadura' => 584.3,
                    'Galicia' => 600.1
                );

                foreach ($escolarizacion as $comunidad=>$valor) {
                    $porcentaje = $valor/10;
                    
                    echo "<tr>";
                    echo "<td>$comunidad</td>";
                    echo "<td>$valor</td>";
                    echo "<td>".$porcentaje."</td>";
                    echo "</tr>";

                }

                $totalPorcentajes = array_sum($escolarizacion) /10;

                $media = $totalPorcentajes / count($escolarizacion);

                echo "<tr>";
                echo "<td colspan='2'>El % medio de escolarización es</td>";
                echo "<td>" . number_format($media, 2) . "</td>";
                echo "</tr>";

                ?>
            </tbody>
        </table>
    </body>
</html>