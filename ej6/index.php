
<?php

    $numElem= [];
    $arrayInverso = [];
    
    define("BITS", 10,true);
    
    //Genramos el array de Bits
    
    for ($i=0;$i<BITS;$i++) {
        
        $numElem[]=rand(0,1);
        
    }
    
    for ($i=0;$i<BITS;$i++) {
        
        if($numElem[$i]==1) {
            
            $arrayInverso[$i]=0;
            
        }else {
            
            $arrayInverso[$i]=1;
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

        <table border="1" style="border-collapse:collapse">
            
            
            <tr> 
                
              
                <?php for($i=0;$i<BITS;$i++): ?>
                    
                    <td><?=$numElem[$i]?></td>
                    
                <?php endfor; ?>  
            
       
            </tr>  
            
            <tr> 
                
              
                <?php for($i=0;$i<BITS;$i++): ?>
                    
                    <td><?=$arrayInverso[$i]?></td>
                    
                <?php endfor; ?>  
            
       
            </tr>  
            
          
        </table>
       
       
        
        
       
    </body>
</html>
