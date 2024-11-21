<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Array números</title>
    </head>
    <body>
        <div id="div-form">
            <?php
            $arrayNum[0] = $_GET['num1'];
            $arrayNum[1] = $_GET['num2'];
            $arrayNum[2] = $_GET['num3'];
            $arrayNum[3] = $_GET['num4'];
            $arrayNum[4] = $_GET['num5'];

            $suma = 0;
            $produto = 1;

            foreach ($arrayNum as $num) { 
                echo "<p>".$num."</p>";
                $suma += $num;
                $produto *= $num;
            }

            echo "<p>La suma de todos los números es ".$suma."</p>";
            echo "<p>El producto de todos los números es ".$produto."</p>";

            $maximo = max($arrayNum);
            $minimo = min($arrayNum);

            echo "<p>El mayor es ".$maximo." y el menor es ".$minimo;
            ?>
        </div>
    </body>
</html>