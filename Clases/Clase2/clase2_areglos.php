<?php 
$universidades = array("UNAM", "UVM","POLI");

echo $universidades[0];
echo "<br>";
echo $universidades[1];
echo "<br>";
echo $universidades[2];
echo "<br>";

$nombre = "FACULTAD";
echo "El tama�o de un string es: ";
echo strlen($nombre);

echo "<br>";

echo "El tama�o de un arreglo es: ";
echo count($universidades);


for($i=0;$i<count($universidades);$i++){
  echo "<h3>";
  echo $universidades[$i];
  echo "</h3>";
}


// ******ARREGLOS ASOCIATIVOS **********

$biblioteca = array(
  "JRR Tolkien"=>array("Se�or de los anillos"),
  "Gabriel G.M."=>array("100 a�os de soledad"),
  "Maquiavelo"=>array("El principe", "Los Castillos")
  );



foreach($biblioteca as $autor => $libro){
  echo "<br><br><br>";
  echo "El autor es: ". $autor;
  echo "<br>";
  
  for($i=0; $i<count($libro);$i++){
    echo "El libro es: ". $libro[$i]."<br>"; 
  }
}

print_r($biblioteca);











?>