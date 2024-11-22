<?php

require_once("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Benvido á nosa páxina web</h1>
    <div id="selection">
        <h2>Selecciona unha opción:</h2>
        <form action="produtos.php" method="get">
            <select name="familia" id="familia">
                <?php
                    $sentenciaPrep = $conexion->prepare("SELECT cod, nombre FROM familias");
                    $sentenciaPrep->execute();

                    $resultado = $sentenciaPrep->get_result();

                    while($fila = $resultado->fetch_array(MYSQLI_BOTH)){
                        
                        echo "<option value='" . $fila['cod'] . "'>" . $fila['nombre'] . "</option><br>";
                    }
                ?>
                <option value="todo">Ver todo</option>
            </select>
            <input type="search" name="consulta" id="consulta" placeholder="Busca por nombre">
            <input type="submit" value="Buscar">
        </form>
        <button><a href="edicion.php">Edición</a></button>
    </div>
</body>
</html>