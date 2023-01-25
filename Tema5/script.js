/* global selectedIndex */

$d = document;

$botonAñadir = $d.querySelectorAll('#enviar');


for (let i = 0; i < $botonAñadir.length; i++) {

    $botonAñadir[i].addEventListener("click", function (e) {

        $nombreHidden = $d.querySelectorAll('#nombrecito');

        for (var x = 0; x < 1; x++) {

            $parrafo = $d.createElement('p');
            $divCesta = $d.querySelector('.cestita');

            $divCesta.appendChild($parrafo);

            $parrafo.textContent = $nombreHidden[i].value;
            
           $eliminar = $d.createElement('button');
           
           $divCesta.appendChild($eliminar);
           
           $eliminar.textContent="Eliminar de a cesta";
           
           $eliminar.addEventListener("click",function(e){
               
               
               $divCesta.remove($parrafo);
               $divCesta.removeChild($eliminar);
               
           });
          

        }
        
        


    });


}






  