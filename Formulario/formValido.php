<?php

require_once './sesionComprobada.php';

compruebaSesion();

if(isset($_SESSION['visitas'])) {
    
    $visitaAnterior=$_SESSION['visitas'];
    
    
} else {

    $_SESSION['visitas']=[];
    
}
    
$_SESSION['visitas'][]= date("d-m-y H:i:s", time());
   
   

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario Valido</title>
    </head>
    <body>


        <h1>Bienvenido</h1>
        
        <form action="cerrar_sesion" method="POST">
            
            <input name="cerrarSesion" type="submit" value="Cierra Sesion">
            
        </form>
        
        <?php if(isset($visitaAnterior)):?>
            
                
            <?php foreach ($visitaAnterior as $value):?>
            
                <p><?=$value?></p>
        
            <?php endforeach;?>
        
         <?php else:?>
                
                <p>Bienvenido</p>
                
             
        <?php endif;?>
                
                
                <form action="borraSesiones" value="BorraSesion">
                    
                    <input type="submit" name="borrar" value="Borrar Sesiones">
                    
                </form>
                
</body>
</html>
