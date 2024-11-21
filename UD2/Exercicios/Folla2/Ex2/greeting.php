<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Saludo</title>
    </head>
    <body>
        <?php
        $age = $_GET['age'];
        $name = $_GET['name']." ".$_GET['surname'];
        if ($age < 18) {
            echo "Hola ".$name.", lembra estudar";
        } elseif($age >= 65) {
            echo "Hola ".$name.", lembra descansar";
        } else {
            echo "Hola ".$name.", ponte a traballar!";
        }
        ?>
    </body>
</html>