<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        $dado1=(int)rand(1, 6);
        $dado2=(int)rand(1, 6);
        $dado3=(int)rand(1, 6);
        
        echo "<img src=\"foto/dado$dado1.svg\"<br/>";
        echo "<img src=\"foto/dado$dado2.svg\"<br/>";
        echo "<img src=\"foto/dado$dado3.svg\"<br/>";
        
        if($dado1==$dado2 && $dado2==$dado3 &&$dado1==$dado3 ){
            
            echo "<p>Trio de $dado1!</p>";
            
        }else if ($dado1==$dado2 || $dado1==$dado3){
            
            echo "<p>Duo de $dado1!</p>";
            
        } else if($dado2==$dado1 || $dado2==$dado3 ){
            
            echo "<p>Duo de $dado2!</p>";
            
        }else if ($dado3==$dado1 || $dado3==$dado2){
            
            echo "<p>Duo de $dado3!</p>";
        }
        
        if($dado1!=$dado2 && $dado2!=$dado3 && $dado1!=$dado3){
            
            echo "<p>No hay duo, ni trio!</p>";
        }
        
        
        if($dado1>$dado2 && $dado1>$dado3 && $dado2>$dado3){
           
            $major=$dado1;
            $menor=$dado3;
            $dife=$major-$menor;
            
            echo "<p>La diferencia entre $major y $menor es $dife</p>";
            
        }
        else if($dado1>$dado2 && $dado1>$dado3 && $dado3>$dado2){
           
            $major=$dado1;
            $menor=$dado2;
            $dife=$major-$menor;
            
            echo "<p>La diferencia entre $major y $menor es $dife</p>";
            
        }
        
        
        else if($dado2>$dado3 && $dado2>$dado1 && $dado3>$dado1){
            
            $major=$dado2;
            $menor=$dado1;
            $dife=$major-$menor;
            
             echo "<p>La diferencia entre $major y $menor es $dife</p>";
            
        }
        else if($dado2>$dado3 && $dado2>$dado1 && $dado1>$dado3){
            
            $major=$dado2;
            $menor=$dado3;
            $dife=$major-$menor;
            
             echo "<p>La diferencia entre $major y $menor es $dife</p>";
            
        }
        else if($dado3>$dado2 &&  $dado3>$dado1 && $dado1>$dado2){
           $major=$dado3;
           $menor=$dado2;
           $dife=$major-$menor;
           
            echo "<p>La diferencia entre $major y $menor es $dife</p>";
            
        }
        
        else if($dado3>$dado2 &&  $dado3>$dado1 && $dado2>$dado1){
           
           $major=$dado3;
           $menor=$dado1;
           $dife=$major-$menor;
           
            echo "<p>La diferencia entre $major y $menor es $dife</p>";
            
        }
        
        
        ?>
    </body>
</html>
