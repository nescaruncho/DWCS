<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
</head>

<body>
    <br />
    <form action="sesion1b.php" method="post">
        <label for="user">User:</label>
        <input type="text" name="user" id="user">
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Enviar">
    </form>
    <br />
    <?php
    if (isset($_SESSION['data'])) {
        echo "<p>User: ". htmlspecialchars($_SESSION['data']['name']) ."</p>";
        echo "<p>Password: ". htmlspecialchars($_SESSION['data']['password']) ."</p>";
    } else {
        echo "<p>No data in session</p>";
    }
    ?>
    <br />
    <h2>I'm at page 1a</h2>
    <a href="sesion1b.php">Go to session 1b</a>
</body>

</html>