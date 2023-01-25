<?php
$primerDado = rand(1, 6);
$segDado = rand(1, 6);
$tercerDado = rand(1, 6);

if ($primerDado == $segDado && $segDado == $tercerDado) {

    $mensaje = "Los dados son iguales. Ha salido trio!";
} else if ($primerDado < $segDado && $segDado < $tercerDado) {
    $mayor = $tercerDado;
    $menor = $primerDado;
    $mensaje = "Los dados no coinciden. El dado mayor es " . $mayor;
} else if ($primerDado > $segDado && $segDado > $tercerDado) {
    $mayor = $primerDado;
    $menor = $tercerDado;
    $mensaje = "Los dados no coinciden. El dado mayor es " . $mayor;
} else if ($primerDado < $segDado && $segDado > $tercerDado) {
    $mayor = $segDado;
    $menor = $tercerDado;
    $mensaje = "Los dados no coinciden. El dado mayor es " . $mayor;
} else if ($primerDado == $segDado || $primerDado == $tercerDado || $segDado == $primerDado || $segDado == $tercerDado || $tercerDado == $primerDado || $tercerDado == $segDado) {

    $mensaje = "Ha salido una pareja!";
    
} else if ($primerDado > $segDado && $segDado < $tercerDado) {

    $mayor = $tercerDado;
    $menor = $segDadoDado;
    $mensaje = "Los dados no coinciden. El dado mayor es " . $mayor;
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
        <p>Tercer Dado: <?= $tercerDado ?></p>
        <br>
        <p><?= $mensaje ?></p>

    </body>
</html>
