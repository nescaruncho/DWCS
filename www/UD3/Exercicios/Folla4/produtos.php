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
                echo "<tr>";
                echo "<td>" . $fila['nombre_corto'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['descripcion'] . "</td>";
                echo "<td>" . $fila['pvp'] . "</td>";
                echo "<td>" . $fila['familia'] . "</td>";
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
                echo "<tr>";
                echo "<td>" . $fila['nombre_corto'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['descripcion'] . "</td>";
                echo "<td>" . $fila['pvp'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    } elseif (isset($_GET['consulta'])) {
        $consulta = $_GET['consulta'];
        $sentenciaPrep = $conexion->prepare("SELECT nombre_corto, nombre, descripcion, pvp FROM productos WHERE nombre LIKE ?");
        $consulta = "%" . $consulta . "%";
        $sentenciaPrep->bind_param('s', $consulta);
    }

    ?>
</body>
</html>