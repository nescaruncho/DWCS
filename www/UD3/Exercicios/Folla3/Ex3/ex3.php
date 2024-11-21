<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $servidor = "db";
    $usuario = "root";
    $passwd = "root";
    $base = "proba";

    //CONECTAMOS
    $conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS COA NOTACIÓN POO
    
    if ($conexion->connect_error)
        die("Non é posible conectar coa BD: " . $conexion->connect_error);
    $conexion->set_charset("utf8");


    $sentencia = $conexion->prepare("SELECT * FROM cliente where nome = ? AND apelidos = ?");

    $nome = $_GET['nome'];
    $apelidos = $_GET['apelidos'];
    
    $sentencia->bind_param("ss", $nome, $apelidos);
    $sentencia->execute();
    $resultado = $sentencia->get_result();

    while ($fila = $resultado->fetch_array(MYSQLI_BOTH))
        echo $fila['codCliente'] . " " . $fila['nome'] . " " . $fila['apelidos'];
    $sentencia->close();
    $conexion->close();

    ?>
</body>

</html>