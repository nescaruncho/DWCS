<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <br/>
    <?php
    echo "The user is ". $_SESSION['usuario'];
    ?>
    <h1>I'm at page 1b</h1>
    <a href="sesion1a.php">Go to session 1a</a>
</body>
</html>