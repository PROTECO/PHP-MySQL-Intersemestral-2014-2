PROYECTO FINAL Inter-2014-2-PHP
===============================
#####Queda prohibido utilizar Dreamweaver. Si se detecta código de algún programa parecido que genere estas acciones, será merecedor de puntos menos e incluso puede reprobar el curso.
<blockquote>
  Fecha de entrega <strong>Viernes</strong> 27 de junio 20:00hrs. Por cada hora tarde, se bajará un punto.
</blockquote>

##Instrucciones
Desarrollar una sitio web dinámico que cumpla con las siguientes características:
<h4>Menu</h4>
<ul>
  <li>Inicio
    <ul>
      <li>Registrarme</li>
      <li>Iniciar sesión</li>
    </ul>
  </li>
  <li>
    Productos
    <ul>
      <li>Ver productos</li>
    </ul>
  </li>
  <li>
    Mi cuenta
    <ul>
      <li>Editar mi perfil</li>
      <li>Ver mis productos apartados</li>
      <li>Administración
        <ul>
          <li>Admin productos</li>
          <li>Admin usuarios</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
===============================

###Inicio
<h4>Módulo de registro e inicio de sesión</h4>
Quienes tendrán acceso:
<pre>Sólo usuarios no registrados (Público en general)</pre>
Se le hará una invitación al usuario para registrarse, si ya está registrado pasará a la sección de <strong>iniciar sesión</strong>. Todo el demás contenido estará restringido y mostrará error en caso de querer acceder.
===============================

###Productos
Quienes tendrán acceso:
<pre>Usuarios logueados</pre>
Aquí se mostrarán todos los productos dados de alta en la administración y se mostrará un botón para <strong>apartar producto**</strong>
===============================

###Mi cuenta
<h4>Módulo de editar perfil</h4>
Quienes tendrán acceso:
<pre>Usuarios logueados y administrador</pre>
Formulario para editar mi perfil
<h4>Módulo de productos apartados</h4>
Quienes tendrán acceso:
<pre>Usuarios logueados</pre>
Se mostrará una lista de productos que se han apartado previamente en la zona de productos. Sino hay productos apartados se muestra una leyenda que diga: "no hay productos apartados"
