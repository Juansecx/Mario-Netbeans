<?php

$pintarTabla = false;
$mensaje = "";

if (isset($_POST ['mostrar'])) {

    $filas = $_POST['filas'];
    
    $col = $_POST['columnas'];

    if ($filas == "" || $filas == " ") {
        
        $pintarTabla;
        
        $mensaje="Tiene que introdusir un numero correcto de filas";
        
    }elseif(!ctype_digit($filas)) {
       
        $mensaje="Por favor, introduzca un numero no caracteres. Gracias";
        
      
    }else {
        
        $pintarTabla=true;
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
        
        <?php if ($pintarTabla==true): ?>      

            <table border="1px">

                <?php for($i = 1; $i <= $filas; $i++):?>
                
                    <tr>
                    
                        <?php for($c=1;$c<$col;$c++) :?>
                
                            <td><?="$i-$c"?></td>    
                            
                        <?php endfor; ?>
                            
                    </tr>
           
                <?php endfor; ?>
        
            </table>   

            <?php else: ?> 
        
            <p> <?= $mensaje ?> </p>  <!--error--> 

             <?php endif; ?>
    </body>
</html>
