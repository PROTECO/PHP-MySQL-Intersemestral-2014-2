TAREA 3
===============================
Descargar carpeta Clases/Clase3/material_tarea3
donde encontrarán el código sql (tarea3.sql) que deberán importar a una base de datos llamada tarea3

OJO: LA BASE DE DATOS "tarea3" USTEDES LA DEBEN CREAR



[[index.php]]
Crear una pagina llamada index.php
  -En esta pagina habrán dos links
  1. El primero te lleva a registro.php
  2. El segundo te llega a inicio de login.php

[[registro.php]]
Donde hay un formulario para insertar usuarios en la tabla de usuario
  -Insertar: nombre, apellido, correo, contraseña
  -Nota: la contraseña debe ir encriptada y los otros campos deben impedir inserción sql


[[login.php]]
Donde el usuario tendrá que ingresar usuario y contraseña. Cuando se envía el formulario, se comparan esos datos con los que estan en la base de datos, si encuentra alguno igual, lo redirije a productos.php
En caso de que falle lo redirije a error.php



[[productos.php]]
Donde el usuario puede insertar un producto a la tabla producto
  -nombre, descripcion y precio

También debe aparecer una tabla en html que despliegue todos los productos de mi base de datos.

[[error.php]]
Que muestre un mensaje de error



