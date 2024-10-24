<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $conexion1=mysqli_connect("dbXDebug", "usuario", "abc123.", "proba");

    function obtenerDatos($conexion){
        if ($conexion) {
            mysqli_set_charset($conexion,"utf8");
            $datos = mysqli_query( $conexion,"SELECT dni, nome, apelidos, idade FROM xogador");
            if ($datos != false) {
                while ($fila = mysqli_fetch_array($datos)) {
                    echo "<tr>";
                    echo "<td>".$fila['dni']."</td>";
                    echo "<td>".$fila['nome']."</td>";
                    echo "<td>".$fila['apelidos']."</td>";
                    echo "<td>".$fila['idade']."</td>";
                    echo "</tr>";
                }
            }
        }
    }

    function menores30($conexion) {
        if ($conexion) {
            mysqli_set_charset($conexion,"utf8");
            $datos = mysqli_query( $conexion,"SELECT dni, nome, apelidos, idade FROM xogador WHERE idade < 30");
            if ($datos != false) {
                while ($fila = mysqli_fetch_array($datos)) {
                    echo "<tr>";
                    echo "<td>".$fila['dni']."</td>";
                    echo "<td>".$fila['nome']."</td>";
                    echo "<td>".$fila['apelidos']."</td>";
                    echo "<td>".$fila['idade']."</td>";
                    echo "</tr>";
                }
            }
        }
    }

    function mayores22($conexion) {
        if ($conexion) {
            mysqli_set_charset($conexion,"utf8");
            $datos = mysqli_query( $conexion,"SELECT dni, nome, apelidos, idade FROM xogador WHERE idade > 22");
            if ($datos != false) {
                while ($fila = mysqli_fetch_array($datos)) {
                    echo "<tr>";
                    echo "<td>".$fila['dni']."</td>";
                    echo "<td>".$fila['nome']."</td>";
                    echo "<td>".$fila['apelidos']."</td>";
                    echo "<td>".$fila['idade']."</td>";
                    echo "</tr>";
                }
            }
        }
    }

    function posteriorGarcia ($conexion) {
        if ($conexion) {
            mysqli_set_charset($conexion,"utf8");
            $datos = mysqli_query( $conexion,"SELECT dni, nome, apelidos, idade FROM xogador WHERE apelidos > 'Garcia'");
            if ($datos != false) {
                while ($fila = mysqli_fetch_array($datos)) {
                    echo "<tr>";
                    echo "<td>".$fila['dni']."</td>";
                    echo "<td>".$fila['nome']."</td>";
                    echo "<td>".$fila['apelidos']."</td>";
                    echo "<td>".$fila['idade']."</td>";
                    echo "</tr>";
                }
            }
        }
    }

    ?>

    <main>

        <table>
            <thead>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </thead>
            <tbody>
                <?php
                obtenerDatos($conexion1);
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </thead>
            <tbody>
                <?php
                menores30($conexion1);
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </thead>
            <tbody>
                <?php
                mayores22($conexion1);
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </thead>
            <tbody>
                <?php
                posteriorGarcia($conexion1);
                ?>
            </tbody>
        </table>

    </main>
</body>
</html>