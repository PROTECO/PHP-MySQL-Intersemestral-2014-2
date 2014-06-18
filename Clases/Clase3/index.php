<?php require("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <?php 

    $query= "SELECT * FROM usuarios";

    $result= mysqli_query($link, $query);

    


   ?>

  <form id="form1" name="form1" action="usuarios.php" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">
    <br>
    <input type="submit">
  </form>


  <table>
    <tr>
      <td>Nombre</td>
      <td>Apellido</td>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <tr>
        <td>
          <?php echo $row["nombre"]; ?>
        </td>
        <td>
          <?php echo $row["apellido"]; ?>
        </td>
        
      </tr>
    <?php } ?>
  </table>


  
</body>
</html>