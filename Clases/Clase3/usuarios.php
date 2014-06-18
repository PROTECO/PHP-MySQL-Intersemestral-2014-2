<?php 

require("conexion.php");

if(isset($_POST["nombre"]) && ($_POST["nombre"] != "")){

    $nombre=$_POST["nombre"];
    $nombre = htmlspecialchars($nombre);
    $apellido=$_POST["apellido"];
    $apellido = htmlspecialchars($apellido);
    $apellido = htmlentities($apellido);
    $apellido = md5($apellido);

    //"<b>hola</b>"
    //"&lyb;hola&luf;"

    $query="INSERT INTO usuarios (nombre,apellido) 
    VALUES('$nombre','$apellido')";

    $insertar = mysqli_query($link,$query);

    if(!$insertar){
      echo "Error con la base de datos, revisa tu conexion";
    }else{
      echo "Guardado con exito";
    }

}else{

  header("Location: index.php");
}

mysqli_close($link);

 ?>