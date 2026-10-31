    <?php

        $pot = 15;

        /*
            header()       
            
                Son instrucciones técnicas privadas entre el servidor y el navegador que el usuario nunca lee directamente en la pantalla, 
                por ello nunca debemos usar echo


                Location    sirve para enviar datos a otra página a través del método GET
                
                            debemos poner la ruta a la página donde queremos enviar el dato

                            ?   indica que se va a poner un dato a enviar
                                la sintaxis es      clave = valor       donde clave puede ser cualquier nombre (es el name del form)
        */

        header("Location: ejemplo_metodo_get.php?ultimo_pot=" . $pot);


        // Siempre detenemos el script tras un header de redirección
        exit(); 
    ?>