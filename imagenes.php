<?php
session_start();
if ($_SESSION["usuario"] === ''){
    header('Location: http://localhost/login.php');
}
if(isset($_FILES["pic"])) {
    #var_dump($_FILES["pic"]);
    move_uploaded_file($_FILES["pic"]["tmp_name"], __DIR__. '/pic/' . $_FILES["pic"]["name"]);
}
?>
<!DOCTYPE html>

<html>

<head>
    <title>Mini proyecto</title>
</head>

<body>
    <h1>Agregar imagenes</h1>
    <img src="pic/1.png" height="150px" />
    <br>
    <img src="pic/2.png" height="150px" />
    <br>
    <img src="pic/3.png" height="150px" />
    <br>
    <form action="imagenes.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pic">            
    <button type="submit">Subir</button>    
    </form>
    <br>
    <br>
    <form action="logout.php">
        <input type="submit" value="Cerrar sesion">
    </form>

</body>   
</html>