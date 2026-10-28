
    <?php 

        /*
            Es una función que comprueba si una variable está definida y su valor no es null. 
            
                Devuelve un valor booleano: 
                
                    true si existe 
                    false si no existe o es nula.

            Se usa cuando se envían los datos de un formulario
        */    
    
        if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]))
            {
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                $numero3 = $_POST["numero3"];
            }
    ?>
    
