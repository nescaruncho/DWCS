<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alumnos DWCS</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Sueldo</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $arrayAlumnos = [
                    'Laura' => 1000,
                    'Jose' => 2300,
                    'Maria' => 1500,
                    'Fran' => 900,
                    'Anonimo' => 4567
                ];

                for ($i=0; $i < count($arrayAlumnos); $i++) { 
                    echo "<tr>";
                    echo "<td>" . array_keys($arrayAlumnos)[$i] . "</td>";
                    echo "<td>" . array_values($arrayAlumnos)[$i] . "</td>";
                    echo "</tr>";
                }

                $media = array_sum($arrayAlumnos) / count($arrayAlumnos);

                echo "<tr>";
                echo "<td>Media</td>";
                echo "<td>$media</td>";
                echo "</tr>";

                ?>
            </tbody>
        </table>
    </body>
</html>