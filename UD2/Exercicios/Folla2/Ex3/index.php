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

            if ($day == 1) {
                echo "<p>Es lunes</p>";
            } elseif ($day == 2) {
                echo "<p>Es martes</p>";
            } elseif ($day == 3) {
                echo "<p>Es miércoles</p>";
            } elseif ($day == 4) {
                echo "<p>Es jueves</p>";
            } elseif ($day == 5) {
                echo "<p>Es viernes</p>";
            } elseif ($day == 6) {
                echo "<p>Es sábado</p>";
            } else {
                echo "<p>Es domingo</p>";
            }
            
            ?>
        </div>
    </body>
</html>