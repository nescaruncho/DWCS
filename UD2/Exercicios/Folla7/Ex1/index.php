<?php
$cadena = "hoxe estamos nun 'dia de outono' chove, chove!!";
$cadena2 = "  exemplo para outras funcións  ";
$funciones = ["strlen()" => [
    "explicacion" => "Devolve o número de caracteres dunha cadea",
    "exemplo" => strlen($cadena) . " caracteres"
    ],
    "substr()" => [
        "explicacion" => "Devolve unha subcadea, empezando polo comezo e de lonxitude lonxitude",
        "exemplo" => substr($cadena, 0, 10)
    ],
    "strstr()" => [
        "explicacion" => "Devolve a cadea desde a primeira aparición da cadea busca",
        "exemplo" => strstr($cadena, "outono")
    ],
    "strchr()" => [
        "explicacion" => "Idéntica á anterior, pero a primeira aparición da letra",
        "exemplo" => strchr($cadena, "o")
    ],
    "strrchr()" => [
        "explicacion" => "Devolve a cadea desde a última aparición do carácter",
        "exemplo" => strrchr($cadena, "o")
    ],
    "strpos()" => [
        "explicacion" => "Devolve a   posición   numérica   da primeira aparición",
        "exemplo" => strpos($cadena, "outono")
    ],
    "str_replace()" => [
        "explicacion" => "Substitúe as aparicións da cadea buscada na cadea orixinal pola substituída",
        "exemplo" => str_replace("outono", "verán", $cadena)
    ],
    "trim()" => [
        "explicacion" => "Elimina os espazos á esquerda e dereita da cadea",
        "exemplo" => trim($cadena2)
    ],
    "ucfirst()" => [
        "explicacion" => "Pasa a maiúscula o primeiro caracter da cadea",
        "exemplo" => ucfirst($cadena)
    ],
    "strcmp()" => [
        "explicacion" => "Devolve un enteiro. Devolve < 0 se str1 vai antes alfabeticamente que str2; >0 se str2 vai antes alfabeticamente que str1; 0 se son iguais",
        "exemplo" => strcmp($cadena, $cadena2)
    ],
    "urlencode()" => [
        "explicacion" => "Devolve   unha   cadea   codificada   para   pasar variables a unha páxina php",
        "exemplo" => urlencode($cadena)
    ],
    "urldecode()" => [
        "explicacion" => "Decodifica calquera cifrado %## dunha cadea dada (suponse que foi previamente codificada para ser pasada a outra páxina php)",
        "exemplo" => urldecode(urlencode($cadena))
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        thead {
            background-color: #333;
            color: white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Nombre de la funcion</th>
            <th>Explicacion</th>
            <th>Ejemplo</th>
        </thead>
        <tbody>
            <?php
            foreach ($funciones as $funcion => $detalles) {
                echo "<tr>";
                echo "<td>$funcion</td>";
                echo "<td>{$detalles['explicacion']}</td>";
                echo "<td>{$detalles['exemplo']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>