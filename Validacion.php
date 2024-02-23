<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $lastnameErr = $phoneErr = $ageErr = $fechainiErr = $fechafinErr ="";
$name = $email = $lastname = $phone = $age = $fechaini = $fechafin = $comment = $adress ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nombre es requerido";
  } else {
    $name = test_input($_POST["Wingston"]);
  }

  if (empty($_POST["email"])) {
    $email = "";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Apellido es requerido";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Teléfono es requerido";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["age"])) {
    $ageErr = "Edad es requerido";
  } else {
    $age = test_input($_POST["age"]);
  }
  
  if (empty($_POST["fechaini"])) {
    $fechainiErr = "Fecha de llegada es requerido";
  } else {
    $fechaini = test_input($_POST["fechaini"]);
  }

  if (empty($_POST["fechafin"])) {
    $fechafinErr = "Fecha de salida es requerido";
  } else {
    $fechafin = test_input($_POST["fechafin"]);
  }

  if (empty($_POST["adress"])) {
    $adress = "";
  } else {
    $adress = test_input($_POST["adress"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Validacion de formularios</h2>
<p><span class="error">* Información requerida</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Apellido: <input type="text" name="lastname">
  <span class="error">* <?php echo $lastnameErr;?></span>
  <br><br>
  Teléfono: <input type="number" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Correo: <input type="text" name="email">  
  <br><br>
  Edad: <input type="number" name="age">
  <span class="error">* <?php echo $ageErr;?></span>
  <br><br>
  Fecha de llegada: <input type="date" name="fechaini">
  <span class="error">* <?php echo $fechainiErr;?></span>
  <br><br>
  Fecha de salida: <input type="date" name="fechafin">
  <span class="error">* <?php echo $fechafinErr;?></span>
  <br><br>
  Direccion: <textarea name="adress" rows="5" cols="40"></textarea>
  <br><br>
  Comentario: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>  
  <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>

<?php
echo "<h2>Su formulario:</h2>";
echo $name;
echo "<br>";
echo $lastname;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $age;
echo "<br>";
echo $fechaini;
echo "<br>";
echo $fechafin;
echo "<br>";
echo $adress;
echo "<br>";
echo $comment;
echo "<br>";
?>

</body>
</html>