<?php
session_start();
if ($_SESSION["usuario"] === ''){
    header('Location: http://localhost/login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Ejercicio 2 de php </title>
    </head>

    <body>
        <h2>Ejercicio sesiones en php</h2>
        <?php echo "<h3>Bienvenido " . $_SESSION['user'] . "</h3>" ?>
    </body>

    <?php
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
    echo "<br><br>". $_SESSION['contador'];
    ?>

    <form action="index.php" method="POST">
        <input type="submit">
    </form>
    <br><br>
    <form action="logout.php">
        <input type="submit" value="Cerrar sesion">
    </form>

</html>

<!-- #Esto es un comentario -->