<?php
if(!isset($_SESSION)){
  session_start();
}
require("php/conexion.php");


// Obtenemos las variables del formulario
$email = $_POST["email"];
$pass = $_POST["pass"];
$email = mysqli_real_escape_string($link, $email);
$pass = mysqli_real_escape_string($link, $pass);

// Las igualamos a otras variables para no tener 
// conflictos de comillas
//print_r($_POST);
//echo "<br>";

// Estas tres las traje del index para ahorrar tiempo
$query_read = "SELECT * FROM usuario WHERE correo='$email' AND password='$pass'";
$result = mysqli_query($link, $query_read);
$row_usuario = mysqli_fetch_assoc($result);
// Ya ahorré tiempo :)

//print_r($row_usuario);
if (isset($_POST['email']) && $row_usuario != "") {
  //echo "Iniciar sesion";
  $_SESSION["apellido"] = $row_usuario['apellido'];
  $_SESSION["img"] = $row_usuario['imagen']; 
  $_SESSION["rol"] = $row_usuario['rol'];
  // echo "Bienvenido". $_SESSION["apellido"];
  header("Location: index.php");


}else{
  echo "No se pudo iniciar sesion";
}


?>