<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <tr>
                <th>Número</th>
                <th>X</th>
                <th>Resultado</th>
            </tr>
            <tr>
            <?php
            $n = 7;
            $x = "x";
            for ($i = 0; $i <= 10; $i++) {
                echo "<col>"."<td>".$n."</td>"."</col>";
                echo "<td>".$x."</td>"; 
                echo "<td>".$n*$i."</td>";
            }
            ?>
        </tr>
        </table>
    </body>
</html>
