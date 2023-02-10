<?php

    $ciudades = json_decode(file_get_contents("./A02-U7-Eduardo-Roca.json"),true);

/*     $ciudades = [];
    
    $ciudades[] = "Barcelona";
    $ciudades[] = "Sanlúcar de Barrameda";
    $ciudades[] = "Sevilla";
    $ciudades[] = "Murcia";
    $ciudades[] = "Málaga"; */


    
    var_dump($ciudades);
    $city = $_REQUEST["ciudad"];

    $found = "";

    if ($city !== "") {
        $city = strtolower($city);
        $len = strlen($city);
        foreach($ciudades as $ciudad) {
          if (stristr($city, substr($ciudad, 0, $len))) {
            if ($found === "") {
              $found = $ciudad;
            } else {
              $found .= ", $ciudad";
            }
          }
        }
      }

      echo $found === "" ? "no suggestion" : $found;