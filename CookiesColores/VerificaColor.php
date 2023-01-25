<?php

if(isset($_REQUEST['color'])){
    
    $colorSeleccionado=$_REQUEST['color'];
    
    setcookie('colores',$colorSeleccionado,time()+3600*24);
    
   $mensaje='Me ha llegado el color ' .$colorSeleccionado;
   
   if($colorSeleccionado=="none"){
       
       unset($_COOKIE['colores']);
   }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Verifica Color</title>
    </head>
    <body>
       
        <div style="color:<?=$colorSeleccionado?>">
            
            <p><?=$mensaje?></p>
            
        </div>
        
        
    </body>
</html>
