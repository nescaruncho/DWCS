<?php
    $servidor = "db";
    $usuario = "root";
    $passwd = "abc123.";
    $base = "tendaInformatica";

    $conexion = new mysqli($servidor, $usuario, $passwd, $base);

    if($conexion->connect_error)
        die("Non é posible conectar coa BD: " . $conexion->connect_error);

    $conexion->set_charset("utf8");
?>