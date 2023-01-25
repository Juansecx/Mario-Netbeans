<?php

class Familia {
    
    
    protected $codigo;
    protected $nombre_familia;
    
    public function __construct($fila_array) {
     
        $this->codigo = $fila_array['cod'];
        $this->nombre_familia = $fila_array['nombre'];
        
    }
    
    public function getCodigo() {
        
        return $this->codigo;
    }
    
    public function setCodigo($codigo) {
        
        $this->codigo = $codigo;
    }
    
     public function getNombre() {
         
        return $this->nombre_familia;
    }
    
    public function setNombre($nombre) {
        
        $this->nombre_familia = $nombre;
    }
    
    
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Familia</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
