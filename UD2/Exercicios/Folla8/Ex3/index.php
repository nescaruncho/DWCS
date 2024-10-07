<?php

$array_libros = 
    [
        "El médico" => ["Noah Gordon", "Time Warner"],
        "Marina" => ["Carlos Ruiz Zafón", "Edebé"],
        "La hoguera de las vanidades" => ["Tom Wolfe", "RBA editores"],
        "El libro de las ilusiones" => ["Paul Auster", "Faber"],
        "La muerte en Venecia" => ["Thomas Mann", "Anaya"],
        "A sangre fría" => ["Truman Capote", "Illusions"],
        "2001: Una odisea del espacio" => ["Arthur C. Clarke", "P&J"]
    ];

$resultados = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["buscar"]) && !empty($_POST["buscar"])) {
        $buscar = strtolower($_POST["buscar"]);
        foreach ($array_libros as $titulo => $datos) {
            if (strpos(strtolower($titulo), $buscar) !== false) {
                $resultados[$titulo] = $datos;
            }
        }
    } elseif (isset($_POST['accion'])) {
        if ($_POST['accion'] == 'completo') {
            $resultados = $array_libros;
        } elseif ($_POST['accion'] == 'ordenado') {
            $resultados = $array_libros;
            ksort($resultados);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <header>
        <img src="./images/biblioteca.webp" alt="Biblioteca">
        <h1>BIBLIOTECA</h1>
        <div id="buscar">
            <p>Buscar ejemplar</p>
            <form action="index.php" method="post">
                <input type="text" name="buscar" id="buscar">
                <input type="submit" value="Buscar">
            </form>
        </div>
        <div id=listado>
            <form action="index.php" method="post">
                <input type="submit" value="completo">
                <input type="submit" value="ordenado">
            </form>
        </div>
    </header>
    <main>
        <table>
            <tr>
                <thead>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                </thead>
            </tr>
            <tbody>
                <?php
                foreach ($resultados as $titulo => $datos) {
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$datos[0]</td>";
                    echo "<td>$datos[1]</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
</body>
</html>