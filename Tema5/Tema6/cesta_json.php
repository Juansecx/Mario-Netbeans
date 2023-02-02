<?php

require_once '../Servicio/funciones.php';

require_once '../Servicio/CestaCompra.php';

comprobarSesion();

$cesta = CestaCompra::carga_cesta();


echo json_encode($cesta->get_carrito());





