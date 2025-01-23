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
    <br />
    <?php
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $userName = htmlspecialchars($_POST['user']);
        $passwd = htmlspecialchars($_POST['pass']);
        $data = array("name" => $userName, "password" => $passwd);
        $_SESSION['data'] = $data;
        echo "<p>Session data stored succesfully!</p>";
    } else {
        echo "<p>No data received</p>";
    }
    ?>
    <h1>I'm at page 1b</h1>
    <a href="sesion1a.php">Go to session 1a</a>
</body>

</html>