<?php 

// *********PRIMERO DEFINIMOS LOS EQUIPOS********

// Se pueden definir como una variable en codigo html

$jugadoresAlemania= "
<ul>
  <li>Aleman 1</li>
  <li>Aleman 2</li>
  <li>Aleman 3</li>
  <li>Aleman 4</li>
  <li>Aleman 5</li>
  <li>Aleman 6</li>
  <li>Aleman 7</li>
  <li>Aleman 8</li>
  <li>Aleman 9</li>
  <li>Aleman 10</li>
  <li>Aleman 11</li>
</ul>";

$jugadoresBancaAlemania= "
<ul>
  <li>Banca Aleman 1</li>
  <li>Banca Aleman 2</li>
  <li>Banca Aleman 3</li>
  <li>Banca Aleman 4</li>
  <li>Banca Aleman 5</li>
  <li>Banca Aleman 6</li>
  <li>Banca Aleman 7</li>
  <li>Banca Aleman 8</li>
  <li>Banca Aleman 9</li>
  <li>Banca Aleman 10</li>
  <li>Banca Aleman 11</li>
</ul>";


// Se pueden definir como variables por separado

$jugadorPortugal1 = "Portugues 1";
$jugadorPortugal2 = "Portugues 2";
$jugadorPortugal3 = "Portugues 3";
$jugadorPortugal4 = "Portugues 4";
$jugadorPortugal5 = "Portugues 5";


//************** TROFEOS *********

$trofeo1 = "Campeon de goleo <br>";
$trofeo2 = "Mejor jugador del Mundial <br>";
$trofeo3 = "Pichichi <br>";

// ********* ASIGNAMOS ROLES PARA VALIDAR ENTRADA DE USUARIO

$equipo = "Alemania";
$dt = true;
$aux = false;
$camisa = 10;

// **********AQUI EMPEZAMOS EL CODIGO VALIDACIÓN DE CASOS

if($equipo == "Alemania"){
  // Caso en el que eres de Alemania
  echo "Eres del equipo de ". $equipo."<br>";

  // Ya que entramos al caso de Alemania, valida el rol.
  //Para validar operadores Booleanos (true, false)
  //No es necesario igualarlos a  == true,false
      
      if($dt){
        if($aux){
          echo "No puedes ser los dos roles al mismo tiempo, apaga uno";
        }else{
          echo "Eres DT";
          echo $jugadoresAlemania;
        }

      }else{
        if($aux){
          echo "Eres Aux";
          echo $jugadoresAlemania."<br>".$jugadoresBancaAlemania;
        }
      }

  
}else if($equipo == "Portugal"){
  //Sino eres de Alemania, se anida otro caso y se valida
  //Caso en el que eres de Portugal

  echo "<h1>Eres de Portugal</h1>";
  if($camisa == 10){
    echo "<h3>Tu numero de camisa es el 10</h3>";
    echo $trofeo1.$trofeo2.$trofeo3;
  }else{
    echo "No eres el numero 10 de Portugal. Sigue intentando";
  }

}else{
  //Sino eres alguno de los otros dos casos, eres de otro conjunto.
  echo "Ese equipo no juega hoy";
}





 ?>