<?php

class CestaCompra {

    protected $cesta = [];
    protected $productos = array();

    public function cargar_articulo($codigo, $unidades) {

        if (array_key_exists($codigo, $this->productos)) {

            $this->productos[$codigo]['unidades'] += $unidades;
        } else {
            $this->productos[$codigo]['producto'] = BD::obtenerProductos($codigo);
            $this->productos[$codigo]['unidades'] = $unidades;
        }
    }

    public static function cargar_cesta() {

        if (isset($_SESSION['cesta'])) {

            $cesta_compra = $_SESSION['cesta'];
        } else {
            $cesta_compra = new CestaCompra();
        }

        return CestaCompra;
    }

    public function guardar_cesta() {

        $_SESSION['cesta'] = $this;
    }

    
    
    
    
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
// put your code here
?>
    </body>
</html>
