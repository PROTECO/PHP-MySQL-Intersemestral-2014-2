TAREA 3
===============================
<blockquote>
  Fecha de entrega 19 de junio 7:59am
</blockquote>

##Instrucciones
Descargar la siguiente carpeta:
<pre>Clases/Clase3/material_tarea3</pre>
Ahí encontrarán el archivo SQL:
<pre>tarea3.sql</pre>
Importar ese archivo a una base de datos llamada: <strong>tarea3</strong>
<blockquote><strong>OJO:</strong>USTEDES DEBEN crear la base de datos llamada "tarea3" pero las tablas ya se las di en el codigo tarea3.sql
</blockquote>
 


###[[index.php]]
Crear la página principal llamada:
<pre>index.php</pre>
<p>Donde habrán los siguientes links</p>
  <pre>
    <ol>
      <li><strong>Registro</strong> (Que te debe llegar a registro.php)</li>
      <li><strong>Iniciar sesión</strong>(Que te debe llevar a iniciar.php )</li>
    </ol>
  </pre>


###[[registro.php]]
Donde hay un formulario que deberá <strong>insertar</strong> usuarios en la tabla de <strong>usuario</strong> con los siguientes campos
  <pre>
    <ul>
      <li>nombre</li>
      <li>apellido</li>
      <li>correo</li>
      <li>password</li>
    </ul>
  </pre>
  <blockquote>
    <strong>NOTA: </strong>
    <p>La contraseña debe ir encriptada y los otros campos deben impedir inserción sql</p>
  </blockquote>
 


[[login.php]]
Donde el usuario tendrá que ingresar usuario y contraseña. Cuando se envía el formulario, se comparan esos datos con los que estan en la base de datos, si encuentra alguno igual, lo redirije a productos.php
En caso de que falle lo redirije a error.php



[[productos.php]]
Donde el usuario puede insertar un producto a la tabla producto
  -nombre, descripcion y precio

También debe aparecer una tabla en html que despliegue todos los productos de mi base de datos.

[[error.php]]
Que muestre un mensaje de error



