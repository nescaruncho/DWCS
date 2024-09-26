<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elementos del grupo seleccionado</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nº atómico</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $elementos = array(
                "Alcalinos" => array("Li" => 3, "Na" => 11, "K" => 19, "Rb" => 37, "Cs" => 55, "Fr" => 87),
                "Alcalino-térreos" => array("Be" => 4, "Mg" => 12, "Ca" => 20, "Sr" => 38, "Ba" => 56, "Ra" => 88),
                "Térreos" => array("B" => 5, "Al" => 13, "Ga" => 31, "In" => 49, "Tl" => 81)
            );

            if (isset($_POST["elemento"])) {
                $grupo = $_POST["elemento"];
                if (array_key_exists($grupo, $elementos)) {
                    foreach ($elementos[$grupo] as $nombre => $numero) {
                        echo "<tr><td>$nombre</td><td>$numero</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Grupo no válido</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No se seleccionó ningún grupo</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
