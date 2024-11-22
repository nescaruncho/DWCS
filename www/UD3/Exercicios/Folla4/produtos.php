<?php
require_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de produtos</h1>
    <?php

    if (isset($_GET['familia']) && empty($_GET['consulta'])) {
        
        $familia = $_GET['familia'];

        if ($familia == "todo") {
            $sentenciaPrep = $conexion->prepare("SELECT nombre_corto, nombre, descripcion, pvp, familia FROM productos");
            $sentenciaPrep->execute();

            $resultado = $sentenciaPrep->get_result();

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Código</th>";
            echo "<th>Nome</th>";
            echo "<th>Descrición</th>";
            echo "<th>Prezo</th>";
            echo "<th>Familia</th>";
            echo "</tr>";

            while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {

                $descripcion = $fila['descripcion'];
                if (mb_strlen($descripcion) > 100) {
                    $descripcion = mb_substr($descripcion, 0, 100) . '...';
                }

                echo "<tr>";
                echo "<td>" . $fila['nombre_corto'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $descripcion . "</td>";
                echo "<td>" . $fila['pvp'] . "</td>";
                echo "<td>" . $fila['familia'] . "</td>";
                echo "<td>";
                echo "<form action='detalle.php' method='get'>";
                echo "<input type='hidden' name='codigo' value='" . $fila['nombre_corto'] . "'>";
                echo "<input type='submit' value='Detalles'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            $sentenciaPrep = $conexion->prepare(("SELECT nombre_corto, nombre, descripcion, pvp FROM productos WHERE familia = ?"));
            $sentenciaPrep->bind_param('s', $familia);

            $sentenciaPrep->execute();
            $resultado = $sentenciaPrep->get_result();

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Código</th>";
            echo "<th>Nome</th>";
            echo "<th>Descrición</th>";
            echo "<th>Prezo</th>";
            echo "</tr>";

            while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {

                $descripcion = $fila['descripcion'];
                if (mb_strlen($descripcion) > 100) {
                    $descripcion = mb_substr($descripcion, 0, 100) . '...';
                }

                echo "<tr>";
                echo "<td>" . $fila['nombre_corto'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $descripcion . "</td>";
                echo "<td>" . $fila['pvp'] . "</td>";
                echo "<td>";
                echo "<form action='detalle.php' method='get'>";
                echo "<input type='hidden' name='codigo' value='" . $fila['nombre_corto'] . "'>";
                echo "<input type='submit' value='Detalles'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    } elseif (!empty($_GET['consulta'])) {
        $consulta = $_GET['consulta'];
        $sentenciaPrep = $conexion->prepare("SELECT nombre_corto, nombre, descripcion, pvp FROM productos WHERE nombre LIKE ? OR descripcion LIKE ? OR nombre_corto LIKE ?");
        $consulta = "%" . $consulta . "%";
        $sentenciaPrep->bind_param('sss', $consulta, $consulta, $consulta);

        $sentenciaPrep->execute();

        $resultado = $sentenciaPrep->get_result();

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Código</th>";
        echo "<th>Nome</th>";
        echo "<th>Descrición</th>";
        echo "<th>Prezo</th>";
        echo "</tr>";

        while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {

            $descripcion = $fila['descripcion'];
            if (mb_strlen($descripcion) > 100) {
                $descripcion = mb_substr($descripcion, 0, 100) . '...';
            }

            echo "<tr>";
            echo "<td>" . $fila['nombre_corto'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $descripcion . "</td>";
            echo "<td>" . $fila['pvp'] . "</td>";
            echo "<td>";
            echo "<form action='detalle.php' method='get'>";
            echo "<input type='hidden' name='codigo' value='" . $fila['nombre_corto'] . "'>";
            echo "<input type='submit' value='Detalles'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
    }

        echo "</table>";
    }

    echo "<form action='inicio.php' method='get'>";
    echo "<input type='submit' value='Volver'>";
    echo "</form>";
    ?>
</body>
</html>