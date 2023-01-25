
        <?php
        
        $nombre='Juan';
        $apellido='Carlos';
        
        foreach ($GLOBALS as $key => $value) {
            
            if($key=='nombre' || $key=='apellido'){
               
            echo 'Clave: '. $key. '<br>'.'Valor: '.$value. '<br>';           
        }
        }
        
        
        
        ?>
