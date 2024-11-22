<?php
require_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <style>
        #container {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 50%;
            margin: 0 auto;
            border: 2px solid black;
            border-radius: 20px;
            padding: 2em;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php

            if (isset($_GET['codigo'])) {
                $codigo = $_GET['codigo'];

                $sentenciaPrep = $conexion->prepare("SELECT nombre, nombre_corto, descripcion, pvp, familia FROM productos WHERE nombre_corto = ?");
                $sentenciaPrep->bind_param('s', $codigo);

                $sentenciaPrep->execute();
                $resultado = $sentenciaPrep->get_result();

                $fila = $resultado->fetch_array(MYSQLI_BOTH);

                echo "<h1>Detalles do produto</h1>";
                echo "<p><strong>Nome:</strong> " . $fila['nombre'] . "</p>";
                echo "<p><strong>Descrición:</strong> " . $fila['descripcion'] . "</p>";
                echo "<p><strong>Prezo:</strong> " . $fila['pvp'] . "</p>";
                echo "<p><strong>Código:</strong> " . $fila['nombre_corto'] . "</p>";
                echo "<p><strong>Familia:</strong> " . $fila['familia'] . "</p>";
            }
        echo "<a href='inicio.php'>Volver ao inicio</a>";
        ?>
    </div>
</body>
</html>