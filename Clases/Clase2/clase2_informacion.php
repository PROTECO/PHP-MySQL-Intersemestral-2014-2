<?php 

$usuario = $_POST["user"];
$pass = $_POST["password"];

if(isset($usuario) && $usuario != ""){
  if($usuario == "Pedro"){

      if(isset($pass) && $pass =="123"){
        echo "Bienvenido".$usuario;
      }else{
        echo "Esta mal tu contraseña";
      }
  }else{
    echo "No se encontro en la base de datos";
  }
  


}else{
  echo "El usuario esta vacío";
}

?>