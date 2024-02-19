<?php
if($_POST["user"] === 'Admin' && $_POST["pass"] === 'Admin1234'){
    session_start();
    $_SESSION['user'] = $_POST["user"];
    header('Location: http://localhost/imagenes.php');
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mini proyecto</title>
    </head>

    <body>
        <form action="login.php" method="POST">
        <h2>Inicio de sesion</h2>
        <label for="usuario">Usuario</label>
        <input type="text" name="user">
        <br>
        <br>
        <label for="password">Password</label>
        <input type="password" name="pass">
        <br>
        <br>
        <input type="submit">
        </form>
    </body>

</html>