<?php
spl_autoload_register(function ($nombre_clase) {
    include 'clases/' . $nombre_clase . '.php';
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="probaCalculo.php" method="post">
        <label for="operando1">Operando 1:</label>
        <input type="text" name="operando1" id="operando1">
        <br>
        <label for="operando2">Operando 2:</label>
        <input type="text" name="operando2" id="operando2">
        <br>
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplica">Multiplica</option>
        </select>
    </form>
    <?php
    if (empty($_POST['operando1']) || empty($_POST['operando2']) || !isset($_POST['operacion'])) {
        echo "<p>Debes introducir todos os datos!</p>";
    } else {
        switch ($_POST['operacion']) {
            case 'suma':
                $suma = new Suma();
                $suma->setOperando1($_POST['operando1']);
                $suma->setOperando2($_POST['operando2']);
                echo "<p>Resultado: " . $suma->calcula() . "</p>";
                break;
            case 'resta':
                $resta = new Resta();
                $resta->setOperando1($_POST['operando1']);
                $resta->setOperando2($_POST['operando2']);
                echo "<p>Resultado: " . $resta->calcula() . "</p>";
                break;
            case 'multiplica':
                $multiplica = new Multiplica();
                $multiplica->setOperando1($_POST['operando1']);
                $multiplica->setOperando2($_POST['operando2']);
                echo "<p>Resultado: " . $multiplica->calcula() . "</p>";
                break;
        }
    }
    ?>
</body>
</html>