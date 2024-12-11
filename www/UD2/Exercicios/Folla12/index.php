<?php
include("pinturas.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="button" value="Listado completo" id="completo">
        <input type="button" value="Ordenar por autor" id="autor">
        <input type="button" value="Ordenar por título" id="titulo">
        <input type="button" value="Ordenar cronológicamente" id="cronologia">
        <input type="button" value="Ordenar cronológicamente inversa" id="crono_inversa">
        <input type="button" value="Pasar a mayúscula la primera letra de cada palabra" id="primera_mayus">
        <input type="button" value="Pasar a mayúscula la tercera letra del título" id="tercera_mayus">
        <input type="button" value="Elimina los espacios de los títulos" id="elimina_espacios">
        <input type="button" value="Cambia la letra o por la letra u en todos los campos" id="cambiar_letra">
        <input type="search" name="buscar" id="buscar">
        <input type="submit" value="Buscar">
    </form>
    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Técnica</th>
            <th>Estilo</th>
        </tr>
        <?php
            
        ?>
</body>
</html>