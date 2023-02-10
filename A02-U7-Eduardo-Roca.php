
<?php
// Array con las sugerencias. (Lo recibe de un JSON)
$cities = json_decode(file_get_contents("./A02-U7-Eduardo-Roca.json"), true);

// Obtiene la petición cuyo parametro es "city".
$city = $_REQUEST["city"];

$found = "";

// Bucle que comprueba que el parametro no sea cadena vacia.
if ($city !== "") {
  $city = strtolower($city); // Convierte la cadena en minuscula.
  $len = strlen($city); // Guarda el tamaño de la cadena.
  foreach ($cities["ciudades"] as $cit) {
    if (stristr($city, substr($cit, 0, $len))) { // Compara si el caracter escrito se encuentra en la cadena para mostrar las sugerencias.
      if ($found === "") {
        $found = $cit;
      } else {
        $found .= ", $cit";
      }
    }
  }
}

// Muestra la sugerencia o "No existe sugerencia" en caso de ser cadena vacia.
echo $found === "" ? "No existe sugerencia..." : $found;
