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
            $autor = strtolower($datos[0]);
            $editorial = strtolower($datos[1]);

            if (strpos(strtolower($titulo), $buscar) !== false || strpos($autor, $buscar) !== false || strpos($editorial, $buscar) !== false) {
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            position: relative;
        }

        header img {
            width: 100%;
            height: auto;
            opacity: 0.3;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        header h1 {
            margin: 0;
            padding: 20px 0;
            font-size: 2.5em;
            z-index: 1;
            position: relative;
        }

        #buscar, #listado {
            margin: 20px 0;
        }

        #buscar form, #listado form {
            display: inline-block;
            margin: 0 10px;
        }

        #buscar input[type="text"], #buscar input[type="submit"], #listado input[type="submit"] {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px 0;
        }

        #buscar input[type="submit"], #listado input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #buscar input[type="submit"]:hover, #listado input[type="submit"]:hover {
            background-color: #45a049;
        }

        main {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <header>
        <img src="./images/biblioteca.webp" alt="Biblioteca">
        <h1>BIBLIOTECA</h1>
        <div id="buscar">
            <p>Buscar ejemplar</p>
            <form action="index.php" method="post">
                <input type="text" name="buscar" id="buscar" placeholder="Escribe el título del libro">
                <input type="submit" value="Buscar">
            </form>
        </div>
        <div id=listado>
            <form action="index.php" method="post">
                <input type="hidden" name="accion" value="completo">
                <input type="submit" value="Mostrar completo">
            </form>
            <form action="index.php" method="post">
                <input type="hidden" name="accion" value="ordenado">
                <input type="submit" value="Mostrar ordenado">
            </form>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($resultados)): ?>
                <?php foreach ($resultados as $titulo => $datos): ?>
                <tr>
                    <td><?php echo $titulo; ?></td>
                    <td><?php echo $datos[0]; ?></td>
                    <td><?php echo $datos[1]; ?></td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="3">No se han encontrado resultados</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
</body>
</html>