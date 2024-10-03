<?php
$puntos = array("Ana" => 123, "Belén" => 14, "Felipe" => 3, "Moncho" => 245, "Artur" => 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenando arrays en PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            text-align: center;
        }
        thead {
            background-color: black;
            color: white;
        }
        th, td {
            padding: 0.5rem;
        }
        table {
            border-collapse: collapse;
            width: 80%;
        }
        td {
            border: solid black 1px;
        }
    </style>
</head>

<body>
    <h1><u>Ordeamento de arrays en PHP</u></h1>
    <table>
        <thead>
            <th>Nome Función</th>
            <th>Explicación do que fai</th>
            <th>Exemplo</th>
            <th>Mostra por pantalla</th>
        </thead>
        <tbody>
            <tr>
                <td>asort()</td>
                <td>Ordena un array de menor a maior mantendo a asociación do elemento co seu índice</td>
                <td>asort($copia)</td>
                <td>
                <?php
                $copia_asort = $puntos;
                asort($copia_asort);
                print_r($copia_asort);
                ?>
                </td>
            </tr>
            <tr>
                <td>sort()</td>
                <td>Ordena os valores do array sen manter a asociación de índices</td>
                <td>sort($copia)</td>
                <td>
                <?php
                $copia_sort = $puntos;
                sort($copia_sort);
                print_r($copia_sort);
                ?>
                </td>
            </tr>
            <tr>
                <td>rsort()</td>
                <td>Ordena os valores inversamente o array sen manter a asociación de índices</td>
                <td>rsort($copia)</td>
                <td>
                <?php
                $copia_rsort = $puntos;
                rsort($copia_rsort);
                print_r($copia_rsort);
                ?>
                </td>
            </tr>
            <tr>
                <td>ksort()</td>
                <td>Ordena o array polas claves mantendo a asociación de índices</td>
                <td>ksort($copia)</td>
                <td>
                <?php
                $copia_ksort = $puntos;
                ksort($copia_ksort);
                print_r($copia_ksort);
                ?>
                </td>
            </tr>
            <tr>
                <td>krsort()</td>
                <td>Ordena polas claves en orde inversa mantendo a asociación de índices</td>
                <td>krsort($copia)</td>
                <td>
                <?php
                $copia_krsort = $puntos;
                krsort($copia_krsort);
                print_r($copia_krsort);
                ?>
                </td>
            </tr>
            <tr>
                <td>shuffle()</td>
                <td>Desordena de xeito aleatorio o array sen manter a asociación de índices</td>
                <td>shuffle($copia)</td>
                <td>
                <?php
                $copia_shuffle = $puntos;
                shuffle($copia_shuffle);
                print_r($copia_shuffle);
                ?>
                </td>
            </tr>
            <tr>
                <td>array_reverse()</td>
                <td>Devolve un NOVO array a partir do orixinal mantendo a asociación de claves</td>
                <td>array_reverse($copia)</td>
                <td>
                <?php
                $copia_reverse = $puntos;
                array_reverse($copia_reverse);
                print_r($copia_reverse);
                ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>