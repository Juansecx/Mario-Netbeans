
<?php

    $nombreSemana=date('l');
    $nombreMes=date('M');
    $year=date('Y');


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fecha Actual</title>
    </head>
    <body>
       
        <p>La fecha de hoy es: <?=$nombreSemana?> de <?=$nombreMes?> del año <?=$year?></p>
        
    </body>
</html>
