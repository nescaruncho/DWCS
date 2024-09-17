<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Titulo de la pagina</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                <tr>
                    <th>Dia</th>
                    <th>Saudo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $saudo_impar = "Bos dias";
                $saudo_par = "Boas tardes";
                
                for ($i = 1; $i <= 100; $i++) {
                    echo "<tr>";
                    
                    if ($i % 2 != 0) {
                        echo "<td class='impar'>" . $i . "</td>";
                        echo "<td class='impar'>" . $saudo_impar . "</td>";
                    } else {
                        echo "<td class='par'>" . $i . "</td>";
                        echo "<td class='par'>" . $saudo_par . "</td>";
                    }
                    
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>