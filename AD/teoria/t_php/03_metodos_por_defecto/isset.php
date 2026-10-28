
    <?php 

        /*
            Es una función que comprueba si una variable está definida y su valor no es null. 
            
                Devuelve un valor booleano: 
                
                    true si existe 
                    false si no existe o es nula.

            Se usa principalemnte para comprobar si se ha pulsado un botón
        */    

        

        //  USO PRINCIPAL

        if (isset($_POST["boton"])) 
        {
            // Entra aquí solo si se ha pulsado el botón. 
        }

    

        //  COMPROBACIÓN DE QUE OTROS DATOS SON VÁLIDOS

        if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]))
            {
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                $numero3 = $_POST["numero3"];
            }
    ?>
    
