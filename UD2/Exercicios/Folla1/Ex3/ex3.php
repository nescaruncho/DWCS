<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>
            <?php
            $n=1;
            for ($i=0; $i <= 50; $i++)
                if ($i%2!=0) {
                    echo "O ", $n, "º impar é ", $i,"<br>";
                    $n++;
                }
            ?>
        </h2>
    </body>
</html>