<?php
$primerDado = rand(1, 6);
$segDado = rand(1, 6);

if($primerDado==$segDado) {
    
    $mensaje="Los dados son iguales";
}else if($primerDado<$segDado){
    $mayor=$segDado;
    $menor=$primerDado;
    $mensaje="Los dados no coinciden. El dado mayor es " .$mayor;
}else if($primerDado>$segDado){
    $mayor=$primerDado;
    $menor=$segDado;
    $mensaje="Los dados no coinciden. El dado mayor es " .$mayor;
    
}



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba Recu Tema2 PHP</title>
    </head>
    <body>

        <p>Primer Dado: <?= $primerDado ?></p>
        <p>Segundo Dado: <?= $segDado ?></p>
        <br>
        <p><?=$mensaje?></p>

    </body>
</html>
