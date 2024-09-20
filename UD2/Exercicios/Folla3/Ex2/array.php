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
            // $arrayNum = array($_GET['num1'], $_GET['num2'], $_GET['num3'], $_GET['num4'], $_GET['num5']);

            $arrayNum[0] = $_GET['num1'];
            $arrayNum[1] = $_GET['num2'];
            $arrayNum[] = $_GET['num3'];
            $arrayNum[] = $_GET['num4'];
            $arrayNum[] = $_GET['num5'];

            $suma = 0;
            $produto = 1;

            for ($i=0; $i < 5; $i++) { 
                echo "<p>".$arrayNum[$i]."</p>";
            }
            for ($i=0; $i < 5; $i++) { 
                $suma += $arrayNum[$i];
            }
            echo "<p>La suma de todos los números es ".$suma."</p>";
            for ($i=0; $i < 5; $i++) { 
                $produto *= $arrayNum[$i];
            }
            echo "<p>El producto de todos los números es ".$produto."</p>";

            $maximo = max($arrayNum);
            $minimo = min($arrayNum);

            echo "<p>El mayor es ".$maximo." y el menor es ".$minimo;
            ?>
        </div>
    </body>
</html>