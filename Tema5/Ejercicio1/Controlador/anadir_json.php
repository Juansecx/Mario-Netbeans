<?php

require_once '../Servicio/funciones.php';
require_once '../Servicio/CestaCompra.php';

comprobarSesion();

$cesta = CestaCompra::carga_cesta();


if(isset($_POST['enviar'])){
    
    $codigo_producto = $_POST['codigo'];
    $unidades_prod = $_POST['unidades'];
    
    $cesta->carga_articulo($unidades_prod,$codigo_producto);
    
    $cesta->guarda_cesta();
    
   
    
}
