<?php  

    /*
        DIFERENCIA DE GET VS POST


        Cuando un usuario teclea la URL de la página y entra por primera vez:
        
            realiza una petición HTTP de tipo GET, por lo que no envía datos de formulario. 
            
            
        Cuando pulsa tu botón:
        
            realiza una petición POST.
    */


    //  1 FORMA

    if($_SERVER['REQUEST_METHOD'] === 'GET')
        {
            //  Es la primera vez que se entra en la página
        }
    else 
        {
            //  Se ha pulsado un botón
        }

        

    //  2 FORMA

    if(empty($_POST))
        {
            //  Es la primera vez que se entra en la página
        }
    else 
        {
            //  Se ha pulsado un botón
        }

?>
    
