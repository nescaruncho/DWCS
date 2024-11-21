<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="table.css">
    </head>
    <body>
        <h1>Listado do formulario</h1>
        <table>
            <tr>
                <th>Nome e apelidos</th>
                <th>Email</th>
                <th>Experiencia</th>
                <th>Idade</th>
                <th>Como atopaches?</th>
                <th>Comentarios</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_POST['nome-apelidos'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($_POST['email'] ?? ''); ?></td>
                <td>
                    <?php
                    if (isset($_POST['musico'])) {
                        echo "Músico";
                    } elseif (isset($_POST['comico'])) {
                        echo "Cómico";
                    } elseif (isset($_POST['actor'])) {
                        echo "Actor";
                    } else {
                        echo "Non ten experiencia";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (isset($_POST['idade'])) {
                        echo $_POST['idade'] === 'mozo' ? "Entre 20 e 30 anos" : "Máis de 40 anos";
                    } else {
                        echo "Non especificado";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $lista = $_POST['lista'] ?? 'Non especificado';
                    switch ($lista) {
                        case 'casual':
                            echo "de casualidade";
                            break;
                        case 'google':
                            echo "polo Google";
                            break;
                        case 'coñecida':
                            echo "é coñecida da familia";
                            break;
                        default:
                            echo "Non especificado";
                            break;
                    }
                    ?>
                </td>
                <td><?php echo htmlspecialchars($_POST['coment'] ?? ''); ?></td>
            </tr>
        </table>
        
        <!-- Debugging output -->
        <h2>Datos recibidos:</h2>
        <pre><?php print_r($_POST); ?></pre>
    </body>
</html>
