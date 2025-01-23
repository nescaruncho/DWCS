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
<br/>
<?php
$_SESSION['usuario'] = "Xan";
?>
<h2>I'm at page 1a</h2>
<a href="sesion1b.php">Go to session 1b</a>
</body>
</html>
