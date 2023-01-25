
<?php

    function compruebaSesion() {
        
        session_start();
        if(isset($_SESSION['visitas'])){
            
            header('Location: index.php');
            
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
