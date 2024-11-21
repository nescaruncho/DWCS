<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #d1dbeb;
            color: #435570;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 20px;
        }

        header img {
            max-width: 100%;
            height: auto;
        }

        h2,h3,p {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }

        input[type="text"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #435570;
            border-radius: 5px;
            width: 80%;
            max-width: 400px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #435570;
            color: #d1dbeb;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2c3e50;
        }
    </style>
</head>
<body>
    <header>
        <img src="./images/cabeceiraFolla2.10.jpg" alt="logo">
    </header>
    <main>
        <h3>Introduce frase</h3>
        <form action="index.php" method="post">
            <input type="text" name="frase" id="frase">
            <input type="submit" name="primera-mayus">Pasar a mayúsculas la primera letra</input>
            <input type="submit" name="primera-minus">Pasar a minúsculas la primera letra</input>
            <input type="submit" name="elimina-espacios">Eliminar espacios</input>
            <input type="submit" name="elimina-letra-e">Eliminar la letra "e"</input>
            <input type="submit" name="cambia-puntos-por-comas">Cambiar puntos por comas</input>
        </form>
        <h3>Introduce palabra</h3>
        <form action="index.php" method="post">
            <input type="hidden" name="frase" value="<?php echo isset($_POST['frase']) ? $_POST['frase'] : ''; ?>">
            <input type="text" name="palabra" id="palabra">
            <input type="submit" name="buscar-palabra">Buscar palabra</input>
            <input type="submit" name="eliminar-palabra">Eliminar palabra</input>
            <input type="submit" name="cambiar-tardes-por-noches">Cambiar "tardes" por "noches"</input>
        </form>
        <h2>Resultado:</h2>
        <p>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (!empty($_POST['frase'])) {
                        $frase = $_POST['frase'];
                        if (isset($_POST['primera-mayus'])) {
                            echo ucfirst($frase);
                        } elseif (isset($_POST['primera-minus'])) {
                            echo lcfirst($frase);
                        } elseif (isset($_POST['elimina-espacios'])) {
                            echo str_replace(' ', '', $frase);
                        } elseif (isset($_POST['elimina-letra-e'])) {
                            echo str_replace('e', '', $frase);
                        } elseif (isset($_POST['cambia-puntos-por-comas'])) {
                            echo str_replace('.', ',', $frase);
                        } 
                    }
                    if (!empty($_POST['palabra']) && !empty($_POST['frase'])) {
                        $palabra = $_POST['palabra'];
                        if (isset($_POST['buscar-palabra'])) {
                            if (strpos($frase, $palabra) === false) {
                                echo 'No se ha encontrado la palabra';
                                return;
                            } else {
                                echo 'Se ha encontrado la palabra';
                            }
                        } elseif (isset($_POST['eliminar-palabra'])) {
                            echo str_replace($palabra, '', $frase);
                        }
                    }
                    if (isset($_POST['cambiar-tardes-por-noches']) && !empty($_POST['frase'])) {
                        if (strpos($frase, 'tardes') === false) {
                            echo 'No se ha encontrado la palabra "tardes"';
                        } else {
                            echo str_replace('tardes', 'noches', $frase);
                        }
                    }
                }
            ?>
        </p>
    </main>
</body>
</html>