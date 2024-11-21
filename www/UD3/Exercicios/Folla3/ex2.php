<!DOCTYPE html>
<html>

<head>
    <title>Conexión a bases de datos</title>
    <meta charset=”UTF8”>
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

    //PREPARAMOS A SENTENCIA:
    $sentenciaPrep = $conexion->prepare("INSERT INTO cliente (nome,apelidos) VALUES(?, ?)");

    //DAMOS VALORES AOS PAŔÁMETROS E EXECUTAMOS:
    $nome = "Ana";
    $apelidos = "García";

    $sentenciaPrep->bind_param('ss', $nome, $apelidos); //INDICAMOS O TIPO DAS VARIABLES
    
    if (!$sentenciaPrep->execute()) //EXECUTAMOS A CONSULTA
        echo "Houbo un erro na execución da consulta";

    $nome = "Lorenzo";
    $apelidos = "Castro";

    $sentenciaPrep->bind_param('ss', $nome, $apelidos);

    if (!$sentenciaPrep->execute())
        echo "Houbo un erro na execución da consulta";
    
    $nome = "María";
    $apelidos = "Rodríguez";

    $sentenciaPrep->bind_param('ss', $nome, $apelidos);

    if (!$sentenciaPrep->execute())
        echo "Houbo un erro na execución da consulta";
    
    $sentenciaPrep->close(); //PECHAMOS AS CONEXIÓNS
    $conexion->close();


    ?>
</body>

</html>