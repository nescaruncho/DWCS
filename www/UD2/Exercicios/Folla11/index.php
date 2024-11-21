<?php
include 'datos1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
</head>
<body>
    <header>
        <h1>Cine</h1>
        <img src="./images/EncabezamentoCine.jpg" alt="Cine">
    </header>
    <main>
        <div>
            <img src="./images/claqueta_1.jpg" alt="claqueta">
        </div>
        <div>
            <h2>Buscar ejemplar</h2>
            <form action="index.php" method="post">
                <input type="text" name="buscar" id="buscar">
                <input type="submit" name="buscar" value="Buscar">
            </form>
            <div id="separador"></div>
            <form action="index.php" method="post">
                <input type="submit" name="listado" value="Listado completo">
                <input type="submit" name="duracion" value="Ordenado por duración">
                <input type="submit" value="director" value="Ordenado por director">
                <input type="submit" value="titulo" value="Ordenador por título">
            </form>
            <div id="durar-mas-que">
                <h2>Con duración mayor que:</h2>
                <form action="index.php" method="post">
                    <input type="text" name="buscar-minutos" id="buscar-minutos">
                    <input type="submit" name="buscar-minutos" value="Buscar">
                </form>
            </div>
        </div>
    </main>
</body>
</html>