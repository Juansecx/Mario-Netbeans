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
        
        $filas=10;//Se podria definir tambie como una costante
        $col=10;
        echo '<table border="1"  style="border-collapse: collapse">'; //imprime una tabla
        $indice=0;
        
        while($indice<$filas) {
            
            echo '<tr>';
           
            $indice2=0;
            
            while($indice2<$col) {
               
                echo "<td>$indice-$indice2</td>";
                
                
                $indice2++;
                
            }
            
            echo '</tr>';
            $indice++;
        }
        
        
        echo '</table>';
        
        
        
        ?>
    </body>
</html>
