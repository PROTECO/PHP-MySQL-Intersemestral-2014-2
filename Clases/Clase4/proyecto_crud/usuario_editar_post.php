<?php 
require("php/conexion.php");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$pass= $_POST["password"];
$id= $_POST["id"];

if (isset($nombre)  && $nombre != ""
                    && $apellido != ""
                    && $correo != ""
                    && $pass != ""){


  $query_update = "UPDATE usuario SET
                    nombre='$nombre',
                    apellido='$apellido',
                    correo='$correo',
                    password='$pass'
                    WHERE id_usuario= '$id'
                  ";
$result =mysqli_query($link, $query_update);
header("Location:index.php");
}
?>





