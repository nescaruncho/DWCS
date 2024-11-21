<?php

function is_numeric_and_set($var) {
    return isset($var) && is_numeric($var);
}

function suma2($num1, $num2) {
    return $num1 + $num2;
}

function suma3($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}

function suma4($num1, $num2, $num3, $num4) {
    return $num1 + $num2 + $num3 + $num4;
}

function multiplica2($num1, $num2) {
    return $num1 * $num2;
}

function multiplica3($num1, $num2, $num3) {
    return $num1 * $num2 * $num3;
}

function multiplica4($num1, $num2, $num3, $num4) {
    return $num1 * $num2 * $num3 * $num4;
}

function maior($num1, $num2, $num3, $num4) {
    return max($num1, $num2, $num3, $num4);
}

function menor($num1, $num2, $num3, $num4) {
    return min($num1, $num2, $num3, $num4);
}

function media($num1, $num2, $num3, $num4) {
    return ($num1 + $num2 + $num3 + $num4) / 4;
}

function factorialN3($num) {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

function segundoMaior($num1, $num2, $num3, $num4) {
    $maior = maior($num1, $num2, $num3, $num4);
    $segundoMaior = $num1;
    if ($num2 > $segundoMaior && $num2 < $maior) {
        $segundoMaior = $num2;
    }
    if ($num3 > $segundoMaior && $num3 < $maior) {
        $segundoMaior = $num3;
    }
    if ($num4 > $segundoMaior && $num4 < $maior) {
        $segundoMaior = $num4;
    }
    return $segundoMaior;
}

function mediana($num1, $num2, $num3, $num4) {
    $array = array($num1, $num2, $num3, $num4);
    sort($array);
    return ($array[1] + $array[2]) / 2;
}

function ordearMaiorMenor($num1, $num2, $num3, $num4) {
    $array = array($num1, $num2, $num3, $num4);
    sort($array);
    return $array;
}

function ordearMenorMaior($num1, $num2, $num3, $num4) {
    $array = array($num1, $num2, $num3, $num4);
    rsort($array);
    return $array;
}
?>

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

        div {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #333;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div>
        <h1>Resultado</h1>
        <p>
        <?php

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];
        $n4 = $_GET['n4'];

        if (isset($_GET['accion'])) {
            $accion = $_GET['accion'];

            switch ($accion) {
                case 'suma2':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2)) {
                        echo $n1 . " + " . $n2 . " = " . suma2($n1, $n2);
                    } else {
                        echo "Introduce dos números para la suma.";
                    }
                    break;

                case 'suma3':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3)) {
                        echo $n1 . " + " . $n2 . " + " . $n3 . " = " . suma3($n1, $n2, $n3);
                    } else {
                        echo "Introduce tres números para la suma.";
                    }
                    break;

                case 'suma4':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo $n1 . " + " . $n2 . " + " . $n3 . " + " . $n4 . " = " . suma4($n1, $n2, $n3, $n4);
                    } else {
                        echo "Introduce cuatro números para la suma.";
                    }
                    break;

                case 'multiplica2':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2)) {
                        echo $n1 . " * " . $n2 . " = " . multiplica2($n1, $n2);
                    } else {
                        echo "Introduce dos números para la multiplicación.";
                    }
                    break;

                case 'multiplica3':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3)) {
                        echo $n1 . " * " . $n2 . " * " . $n3 . " = " . multiplica3($n1, $n2, $n3);
                    } else {
                        echo "Introduce tres números para la multiplicación.";
                    }
                    break;

                case 'multiplica4':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo $n1 . " * " . $n2 . " * " . $n3 . " * " . $n4 . " = " . multiplica4($n1, $n2, $n3, $n4);
                    } else {
                        echo "Introduce cuatro números para la multiplicación.";
                    }
                    break;

                case 'maior':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo "O maior número é: " . maior($n1, $n2, $n3, $n4);
                    } else {
                        echo "Introduce cuatro números para encontrar el mayor.";
                    }
                    break;

                case 'menor':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo "O menor número é: " . menor($n1, $n2, $n3, $n4);
                    } else {
                        echo "Introduce cuatro números para encontrar el menor.";
                    }
                    break;

                case 'media':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo "A média dos números é: " . media($n1, $n2, $n3, $n4);
                    } else {
                        echo "Introduce cuatro números para calcular la media.";
                    }
                    break;

                case 'factorialN3':
                    if (is_numeric_and_set($n3)) {
                        echo "O factorial de " . $n3 . " é: " . factorialN3($n3);
                    } else {
                        echo "Introduce un número para calcular el factorial.";
                    }
                    break;

                case 'segundoMaior':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo "O segundo maior número é: " . segundoMaior($n1, $n2, $n3, $n4);
                    } else {
                        echo "Introduce cuatro números para encontrar el segundo mayor.";
                    }
                    break;

                case 'mediana':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo "A mediana dos números é: " . mediana($n1, $n2, $n3, $n4);
                    } else {
                        echo "Introduce cuatro números para calcular la mediana.";
                    }
                    break;

                case 'ordearMaiorMenor':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo "Os números ordeados de maior a menor son: ";
                        $array = ordearMaiorMenor($n1, $n2, $n3, $n4);
                        foreach ($array as $value) {
                            echo $value . " ";
                        }
                    } else {
                        echo "Introduce cuatro números para ordenar de mayor a menor.";
                    }
                    break;

                case 'ordearMenorMaior':
                    if (is_numeric_and_set($n1) && is_numeric_and_set($n2) && is_numeric_and_set($n3) && is_numeric_and_set($n4)) {
                        echo "Os números ordeados de menor a maior son: ";
                        $array = ordearMenorMaior($n1, $n2, $n3, $n4);
                        foreach ($array as $value) {
                            echo $value . " ";
                        }
                    } else {
                        echo "Introduce cuatro números para ordenar de menor a mayor.";
                    }
                    break;

                default:
                    echo "Non se recoñece a acción";
                    break;
            }
        }
        ?>
        </p>
    </div>
</body>
</html>
