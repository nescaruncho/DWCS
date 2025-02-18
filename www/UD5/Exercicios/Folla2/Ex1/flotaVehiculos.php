<?php
    require_once "vehiculo.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flota de Vehiculos</title>
</head>
<body>
    <form action="flotaVehiculos.php" method="post">
        <label for="matricula">Matricula:</label>
        <input type="text" name="matricula" id="matricula">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo">
        <label for="kms">Kilometros:</label>
        <input type="text" name="kms" id="kms">
        <input type="submit" value="Engadir">
    </form>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Modelo</th>
            <th>Kilometros</th>
        </tr>
        <?php
        if (isset($_POST["matricula"])) {
            $vehiculo = new Vehiculo($_POST["matricula"], $_POST["modelo"], $_POST["kms"]);
            $_SESSION["vehiculos"][] = $vehiculo;
        }
        if (isset($_SESSION["vehiculos"])) {
            foreach ($_SESSION["vehiculos"] as $vehiculo) {
                $vehiculo->mostraEnTR();
            }
        }
        ?>
    </table>
    <form action="flotaVehiculos.php" method="post">
        <input type="submit" name="guardar" value="Gardar en ficheiro">
    </form>
    <?php
    if (isset($_POST["guardar"])) {
        $ficheiro = fopen("vehiculos.txt", "w");
        foreach ($_SESSION["vehiculos"] as $vehiculo) {
            fwrite($ficheiro, $vehiculo->getMatricula() . " " . $vehiculo->getModelo() . " " . $vehiculo->getKms() . "\n");
        }
        fclose($ficheiro);
    }
    ?>
    <form action="flotaVehiculos.php" method="post">
        <input type="submit" name="cargar" value="Cargar de ficheiro">
    </form>
    <?php
    if (isset($_POST["cargar"])) {
        $ficheiro = fopen("vehiculos.txt", "r");
        
        while (!feof($ficheiro)) {
            $datos = explode(" ", fgets($ficheiro));
            if (count($datos) == 3) {
                $vehiculo = new Vehiculo($datos[0], $datos[1], $datos[2]);
                // Verificamos si el vehículo ya existe antes de añadirlo
                $existe = false;
                if (isset($_SESSION["vehiculos"])) {
                    foreach ($_SESSION["vehiculos"] as $v) {
                        if ($v->getMatricula() == $vehiculo->getMatricula()) {
                            $existe = true;
                            break;
                        }
                    }
                }
                if (!$existe) {
                    if (!isset($_SESSION["vehiculos"])) {
                        $_SESSION["vehiculos"] = [];
                    }
                    $_SESSION["vehiculos"][] = $vehiculo;
                }
            }
        }
        fclose($ficheiro);
        echo "<p>Vehículos cargados correctamente</p>";
    }
    ?>
</body>
</html>