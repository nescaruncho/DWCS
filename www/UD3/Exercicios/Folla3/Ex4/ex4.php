<!DOCTYPE html>
<html>

<head>
    <style>
        #contenedor {
            width: 70%;
            margin: 20px auto;
            background-color: white;

            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 5px;
        }

        .tema {
            /* width:200px; */
            height: auto;
            background-color: white;
            border: 1px black solid;
            text-align: center;
            padding-top: 20px;
            font-family: Arial;

        }

        img {
            width: 130px;
            height: 130px;

        }
    </style>


    <meta charset="utf-8" />
    <title></title>
</head>

<body>
    <article id="contenedor">
        <?php

        $servidor = "db";
        $usuario = "root";
        $passwd = "root";
        $base = "proba";

        //CONECTAMOS
        $conexion = new mysqli($servidor, $usuario, $passwd, $base); //CONECTAMOS COA NOTACIÓN POO
        
        if ($conexion->connect_error)
            die("Non é posible conectar coa BD: " . $conexion->connect_error);

        $conexion->set_charset("utf8");

        $sentencia = $conexion->prepare("SELECT * FROM tema");

        $sentencia->execute();
        $resultado = $sentencia->get_result();

        while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {
            echo "<div class='tema'>";
            echo "<h2>" . $fila['Titulo'] . "</h2>";
            echo "<p>" . $fila['Autor'] . "</p>";
            echo "<p>" . $fila['Ano'] . "</p>";
            echo "<p>" . $fila['Duracion'] . "</p>";
            echo "<img src='./imaxes/" . $fila['Imaxe'] . ".jpg'/>";
            echo "</div>";
        }

        $sentencia->close();
        $conexion->close();

        ?>

        <article>
</body>

</html>