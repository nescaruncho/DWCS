<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="">
</head>

<body>
    <table>
        <tr>
            <th>Orden</th>
            <th>Impar</th>
        </tr>
        <tr>
            <?php
            $n = 1;
            for ($i = 0; $i <= 50; $i++) {
                if ($i%2!=0) {
                    echo "<col>"."<td>".$n."</td>"."</col>";
                    $n++;    
                    echo "<td>".$i."</td>";
                }
            }

            ?>
        </tr>
    </table>
</body>

</html>