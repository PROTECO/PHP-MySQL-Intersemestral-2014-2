<?php 
if(!isset($_SESSION)){
  session_start();
}
$_SESSION['apellido'] ="";
$_SESSION['apellido'] =NULL;

unset($_SESSION['apellido']);

session_destroy();

header("Location: index.php");



?>