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
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h3 {
            color: #4CAF50;
        }

        p {
            background: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        strong {
            color: #FF5722;
        }
    </style>
</head>
<body>
    <?php
    $cadena1 = $_POST['cadena1'];
    $cadena2 = $_POST['cadena2'];

    echo "<h3>Primer texto:</h3>";
    echo "<p>$cadena1</p>";

    echo "<h3>Segundo texto:</h3>";
    echo "<p>$cadena2</p>";

    echo "<h3>Resultado:</h3>";
    if (isset($_POST['funciones'])) {
        $funciones = $_POST['funciones'];

        echo "<h3>Funciones seleccionadas:</h3>";
        foreach ($funciones as $funcion) {
            echo "<p>$funcion</p>";
        }

        echo "<h3>Resultado:</h3>";
        foreach ($funciones as $funcion) {
            switch ($funcion) {
                case 'strcspn':
                    echo "<p><strong>strcspn:</strong> " . strcspn($cadena1, $cadena2) . "</p>";
                    break;
                case 'strpos':
                    echo "<p><strong>strpos:</strong> " . (strpos($cadena1, $cadena2) !== false ? strpos($cadena1, $cadena2) : "No encontrado") . "</p>";
                    break;
                case 'strstr':
                    echo "<p><strong>strstr:</strong> " . (strstr($cadena1, $cadena2) ? strstr($cadena1, $cadena2) : "No encontrado") . "</p>";
                    break;
                case 'substr':
                    // Aquí asumimos que la segunda cadena es un número para usar en substr
                    echo "<p><strong>substr:</strong> " . substr($cadena1, 0, (int)$cadena2) . "</p>";
                    break;
                default:
                    echo "<p>Función no válida</p>";
                    break;
            }
        }
    } else {
        echo "<p>No se ha seleccionado ninguna función</p>";
    }

    ?>
</body>
</html>