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
            padding: 0;
        }

        h3 {
            color: #4CAF50;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $cadena = $_POST['string'];
        $option = $_POST['function'];

        // Mostrar la cadena original
        echo "<h3>Cadena original:</h3>";
        echo "<p>$cadena</p>";

        // Mostrar la opción elegida
        echo "<h3>Opción elegida:</h3>";
        switch ($option) {
            case 'strtoupper':
                echo "<p>strtoupper()</p>";
                break;
            case 'strtolower':
                echo "<p>strtolower()</p>";
                break;
            case 'ucwords':
                echo "<p>ucwords()</p>";
                break;
            default:
                echo "<p>Función no válida</p>";
                break;
        }

        echo "<h3>Cadena modificada:</h3>";
        switch ($option) {
            case 'strtoupper':
                echo "<p>" . strtoupper($cadena) . "</p>";
                break;
            case 'strtolower':
                echo "<p>" . strtolower($cadena) . "</p>";
                break;
            case 'ucwords':
                echo "<p>" . ucwords($cadena) . "</p>";
                break;
            default:
                echo "<p>Función no válida</p>";
                break;
        }
        ?>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>