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
                if ($num1 > $num2) {
                    $maior = $num1;
                    $menor = $num2;
                    if ($num3 > $maior) {
                        $maior = $num3;
                        $medio = $num1;
                    } else {
                        if ($num3 < $menor) {
                            $medio = $num2;
                            $menor = $num3;
                        } else {
                            $medio = $num3;
                        }
                    }
                } else {
                    $maior = $num2;
                    $menor = $num1;
                    if ($num3 > $maior) {
                        $maior = $num3;
                        $medio = $num2;
                    } else {
                        if ($num3 < $menor) {
                            $medio = $num1;
                            $menor = $num3;
                        } else {
                            $medio = $num3;
                        }
                    }
                }

                echo "<p>".$maior."</p>";
                echo "<p>".$medio."</p>";
                echo "<p>".$menor."</p>";
            } else {
                echo "Algo saliu mal...";
            }
            
            ?>
        </div>
    </body>
</html>