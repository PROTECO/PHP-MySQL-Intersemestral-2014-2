PROYECTO FINAL Inter-2014-2-PHP
===============================
#####Queda prohibido utilizar Dreamweaver. Si se detecta código de algún programa parecido que genere estas acciones, será merecedor de puntos menos e incluso puede reprobar el curso.
<blockquote>
  Fecha de entrega <strong>Viernes</strong> 27 de junio 20:00hrs. Por cada hora tarde, se bajará un punto.
</blockquote>

##Instrucciones
Desarrollar una sitio web dinámico que cumpla con las siguientes características:
<h4>Menu (5pts)</h4>
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

###Inicio (10pts)
<h4>Módulo de registro e inicio de sesión</h4>
Quienes tendrán acceso:
<pre>Sólo usuarios no registrados (Público en general)</pre>
<p>Se le hará una invitación al usuario para registrarse, si ya está registrado pasará a la sección de <strong>iniciar sesión</strong>. Todo el demás contenido estará restringido y mostrará error en caso de querer acceder.</p>
===============================

###Productos (Mostrar productos 10pts, apartarl productos 20pts)
Quienes tendrán acceso:
<pre>Usuarios logueados</pre>
<p>Aquí se mostrarán todos los productos dados de alta en la administración y se mostrará un botón para <strong>apartar producto**</strong></p>
===============================

###Mi cuenta
<h4>Módulo de editar perfil (5pts)</h4>
Quienes tendrán acceso:
<pre>Usuarios logueados y administrador</pre>
Formulario para editar mi perfil

<h4>Módulo de productos apartados (30pts)</h4> 
<p>Quienes tendrán acceso:
<pre>Usuarios logueados</pre>
Se mostrará una lista de productos que se han apartado previamente en la zona de productos. Sino hay productos apartados se muestra una leyenda que diga: "no hay productos apartados"</p>

###Administración(15pts)
<h4>Módulo de admin productos</h4>
Quienes tendrán acceso:
<pre>administrador</pre>
<p>Donde se hará el CRUD de productos</p>
<h4>Módulo de admin usuarios</h4>
Quienes tendrán acceso:
<pre>administrador</pre>
<p>Donde se hará el CRUD de usuarios</p>
===============================

##Herramientas a utilizar:
<ul>
  <li>Variables</li>
  <li>Estructuras de control (if-else, while, for)</li>
  <li>Arreglos y arreglos asociativos</li>
  <li>Plantillas (include) para código repetido</li>
  <li>Sesiones</li>
  <li>Formularios POST</li>
  <li>Peticiones GET</li>
  <li>Bases de datos MySQL</li>
</ul>
##Notas
Siguientes puntos a considerar:
<ul>
  <li>Si yo no tengo permisos para acceder a un módulo, no puedo acceder escribiendo la URL de la página.</li>
  <li>
    Validaciones en formularios (que no esten vacíos los campos)
  </li>
  <li>Contraseñas encriptadas md5</li>
  <li>Si no tengo permisos para entrar a esa sección, que no la pueda ver en mi menú.</li>
  <li>Que el sitio sea uniforme y coherente en la navegación</li>
</ul>