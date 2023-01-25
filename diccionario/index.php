<?php

$idiomas = ["español", "inglés", "francés", "italiano"];

$palabras = [
    ["perro", "dog", "chien", "cane"],
    ["gato", "cat", "chat", "gatto"],
    ["enero", "january", "janvier", "gennaio"],
    ["feliz", "happy", "heureux", "felice"],
    ["viernes", "friday", "vendredi", "venerdì"],
    ["instituto", "high school", "lycée", "istituto"],
    ["vacaciones", "holidays", "vacances", "vazanze"],
    ["noniná", "", "", ""]
];


  $fila = rand(0, count($palabras) - 1);
  $columna = rand(1, count($idiomas) -1 );
  $palabraEspaniol = $palabras[$fila][0];
  
  
  
    if($palabras[$fila][$columna] == "") {
      
      $mensaje= "La palabra " .$palabraEspaniol. " no tiene traduccion";
      
    }else {
      
      echo "Idioma a traducir: " .$idiomas[$columna] ."<br/>";
      echo "La palabra " .$palabraEspaniol. " en ".$idiomas[$columna] ." es " .$palabras[$fila][$columna];
      
    }
    
    echo $mensaje;

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Diccionario multilingüe.
  </title>
</head>

<body>
  <h1>Diccionario multilingüe</h1>

  <p>Actualice la página para mostrar una nueva palabra.</p>
  

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>