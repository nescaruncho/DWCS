<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado del día</title>
        <style>

        </style>
    </head>
    <body>
        <div id="day">
            <?php

            $day = $_GET['day'];

            switch ($day) {
                case 1:
                    echo "<p>Es lunes</p>";
                    break;
                case 2:
                    echo "<p>Es martes</p>";
                    break;
                case 3:
                    echo "<p>Es miércoles</p>";
                    break;
                case 4:
                    echo "<p>Es jueves</p>";
                    break;
                case 5:
                    echo "<p>Es viernes</p>";
                    break;
                case 6:
                    echo "<p>Es sábado</p>";
                    break;
                case 7:
                    echo "<p>Es domingo</p>";
                    break;
                default:
                    echo "<p>Número fuera de rango</p>";
                    break;
            }
            
            ?>
        </div>
    </body>
</html>