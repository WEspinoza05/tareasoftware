<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$numero = $_POST["numero"];
echo "<p> Bienvenido $nombre  $apellido </p>";

$a = 10;
$b = $_POST;
for($i = 1; $i <= $a; $i++)
{
    $total = $i * $numero;
    echo "$numero * ". $i. "=". $total  . "<br>";
}
?>

<!-- Esto es la bienvenida -->