<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a bases de datos</title>
</head>
<body>
    <?php

    $conexion=mysqli_connect("dbXDebug", "usuario", "abc123.", "proba");

    if ($conexion) {
        echo "Conexión con base de datos hecha.<br>";
    } else {
        echo "Error en la conexión con la base de datos";
    }
    
    mysqli_close($conexion);
    ?>
</body>
</html>