<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Números ordenados</title>
    </head>
    <body>
        <div id="num-div">
            <?php

            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];

            if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {

                $maior = max($num1, $num2, $num3);
                $menor = min($num1, $num2, $num3);

                echo "<p>O maior é ".$maior."</p>";
                echo "<p>O menor é".$menor."</p>";

            } else {
                echo "Algo saliu mal...";
            }
            
            ?>
        </div>
    </body>
</html>