<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'Ana' || $_POST['username'] == 'Xan' && $_POST['password'] == 'abc123.') {
        $_SESSION['username'] = $_POST['username'];
    } else {
        $error = 'Usuario o contraseña incorrectos';
        
    }

     
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>