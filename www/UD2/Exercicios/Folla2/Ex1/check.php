<!DOCTYPE html>
<html>
<?php
    $user1 = "alumno";
    $pass1 = "abc";
    $cadea_1 = $user1.$pass1;

    $user2 = "profesor";
    $pass2 = "123";
    $cadea_2 = $user1.$pass1;


    $user3 = "admin";
    $pass3 = "admin";
    $cadea_3 = $user1.$pass1;


    $user4 = "invitado";
    $pass4 = "000";
    $cadea_4 = $user1.$pass1;


    $cadea_login = $_GET['user'].$_GET['password'];

    if (strcmp($cadea_1,$cadea_login)==0) {
        echo "<h1>Acceso permitido!</h1>";
    } elseif (strcmp($cadea_2,$cadea_login)==0) {
        echo "<h1>Acceso permitido!</h1>";
    } elseif (strcmp($cadea_3,$cadea_login)==0) {
        echo "<h1>Acceso permitido!</h1>";
    } elseif (strcmp($cadea_4,$cadea_login)==0) {
        echo "<h1>Acceso permitido!</h1>";
    } else {
        echo "<h1>Acceso denegado</h1>";
    }

    
?>
</html>