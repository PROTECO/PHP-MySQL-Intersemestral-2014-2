
<?php
echo "Hola Mundo! Va a ganar Alemania hoy"; 

?>

<!-- Variables -->
<?php 

$nombreUsuario = "Marco";
$apellidoUsuario = "Muñoz";
// $nombreCompleto = "Marco"."Muñoz"
$nombreCompleto = $nombreUsuario." ".$apellidoUsuario;

echo $nombreCompleto;
 ?>


<!-- Variables enteras o numéricas -->

<?php 
  $cuenta = 900;
  $porcentajePropina = 0.1;
  $propina = $cuenta * $porcentajePropina;

  $total = $cuenta + $propina;
  echo "<br /> <h1>";
  echo $total;

  echo "</h1>";

?>

<!-- ESTRUCTURAS DE CONTROL -->

<!-- IF / ELSE -->

<?php 
  $jugador = "Muller";

  if($jugador == "Muller") {
    echo "Eres de Alemania";
  }else{
    echo "Eres de Portugal";
  }


  // CASO DONDE SE ANIDA UNA CONDICIONAL IF-ELSE
echo "<br><br><br><br><br><br><br><br><br><br><br>";
  $delantero = "Ronaldo";
  $equipo = "Portugal";
  $numero = "10";

  // El operador lógico && (AND)sirve para
  // Comparar otra condición y las dos
  // se tienen que cumplir

  // El operador lógico || (OR)sirve para
  // Comparar otra condición y las dos
  // se tienen que cumplir

  if($equipo == "Portugal" OR $numero === 10 ){
    echo "Eres de los de rojo con verde <br>";

            if($delantero == "Ronaldo"){
              echo "Seguro metiste el gol de penal <br>";
            }else{
              echo "Eres otro jugador <br>";
            }


  }else{
    echo "No eres de Portugal <br>";
  }
?>

















