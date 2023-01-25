<?php

    function agregaCesta($product,&$cesta){
        
     
        array_push($cesta,$product);
        
    }
    
    function saveCesta($cesta){
        
        $_SESSION['cesta']=$cesta;
        
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
