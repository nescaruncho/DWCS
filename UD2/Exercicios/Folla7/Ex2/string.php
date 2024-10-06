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
    $option = (int)$_POST['option'];

    // Mostrar la cadena original
    echo "<h3>Cadena original:</h3>";
    echo "<p>$cadena</p>";

    // Mostrar la opción elegida
    echo "<h3>Opción elegida:</h3>";
    switch ($option) {
        case 1:
            echo "<p>stripSlashes()</p>";
            break;
        case 2:
            echo "<p>urlencode()</p>";
            break;
        case 3:
            echo "<p>urldecode()</p>";
            break;
        case 4:
            echo "<p>nl2br()</p>";
            break;
        default:
            echo "<p>Opción no válida</p>";
            break;
    }    
    
    echo "<h3>Resultado:</h3>";
    switch ($option) {
        case 1:
            echo "<p>";
            echo stripslashes($cadena);
            echo "</p>";
            break;
        case 2:
            echo "<p>";
            echo urlencode($cadena);
            echo "</p>";
            break;
        case 3:
            echo "<p>";
            echo urldecode($cadena);
            echo "</p>";
            break;
        case 4:
            echo "<p>";
            echo nl2br($cadena);
            echo "</p>";
            break;
        default:
        echo "<p>";
        echo "Opción incorrecta";
        echo "</p>";
        break;
    }
    ?>
    </div>
</body>
</html>