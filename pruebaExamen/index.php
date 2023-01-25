
<?php


define('FILA', 5,true);
define('COLUMNA', 5,true);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <table border="1" style="border-collapse: collapse">
            
            <tr>
                
                
                <?php for ($i=0;$i<FILA;$i++) : ?>
                    
                        <?php $num = rand(0,9)?>
                   
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        
                    <?php endfor; ?>  
                        
                
                
                
            </tr>
            
             <tr>
                
                
                <?php for ($i=0;$i<FILA;$i++) : ?>
                    
                        <?php $num = rand(0,9)?>
                   
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        
                    <?php endfor; ?>  
                        
                
                
                
            </tr>
            
             <tr>
                
                
                <?php for ($i=0;$i<FILA;$i++) : ?>
                    
                        <?php $num = rand(0,9)?>
                   
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        
                    <?php endfor; ?>  
                        
                
                
                
            </tr>
            
             <tr>
                
                
                <?php for ($i=0;$i<FILA;$i++) : ?>
                    
                        <?php $num = rand(0,9)?>
                   
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        <td><?=$num?></td>
                        
                    <?php endfor; ?>  
                        
                
                
                
            </tr>
            
        </table>
        
    </body>
</html>
