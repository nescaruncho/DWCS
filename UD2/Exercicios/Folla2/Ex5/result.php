<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Resultado</title>
    </head>
    <body>
        <div id="calc-div">
            <p>
                <?php

                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $operacion = $_GET['operacion'];

                if (is_numeric($num1) && is_numeric($num2)) {
                    switch ($operacion) {
                        case 'sumar':
                            $result = $num1 + $num2;
                            echo $num1."+".$num2."=".$result;
                            break;
                        case 'restar':
                            $result = $num1 - $num2;
                            echo $num1."-".$num2."=".$result;
                            break;
                        case 'multiplicar':
                            $result = $num1 * $num2;
                            echo $num1."x".$num2."=".$result;
                            break;
                        default:
                            echo "Algo ha ido mal...";
                            break;
                    }
                } else {
                    echo "No has introducido un número";
                }
                

                ?>
            </p>
        </div>
    </body>
</html>