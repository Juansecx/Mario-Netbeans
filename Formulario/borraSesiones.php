<?php

compruebaSesion();

if(isset($_POST['borrar'])){
    
    if(isset($_SESSION['visitas'])) {
        
        unset($_SESSION['visitas']);
        $_SESSION['visitas']=[];
        
    }
    
}

header('Location: formValido.php');

?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
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
