<table class="table table-bordered table-striped table-hover">
  <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Correo</th>
    <th>Password</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    <?php while($row_usuario = mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $row_usuario['id_usuario']; ?></td>
      <td><?php echo $row_usuario['nombre']; ?></td>
      <td><?php echo $row_usuario['apellido']; ?></td>
      <td><?php echo $row_usuario['correo']; ?></td>
      <td><?php echo $row_usuario['password']; ?></td>
      <td>
        <a href="usuario_editar.php?id=<?php echo $row_usuario['id_usuario']; ?>">
        Editar</a>
        - Eliminar
      </td>                       
    </tr>
      <?php } ?>
  </tbody>
</table>