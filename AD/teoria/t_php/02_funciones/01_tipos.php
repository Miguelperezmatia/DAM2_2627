<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        #   FUNCIÓN CON PARÁMETROS Y RETURN 
    
        function saludar($nombre, $edad, $ciudad="Madrid")
        {
            return "Hola, mi nombre es $nombre, tengo $edad años y soy de $ciudad";
        }

        $saludo = saludar("Miguel", 24);
        echo $saludo;

        /*
            Parámetros por defecto


            $ciudad =   "Madrid" es un valor por defecto: si no se pasa ese segundo argumento, la función usa "Madrid" 
                        automáticamente. 
                        
                        Los parámetros con valor por defecto siempre van al final de la lista.
        */


        //  FUNCIÓN CON PARÁMETROS Y SIN RETORNO

        function saludarDos(int $nombre, string $edad)
        {
            echo "Hola, mi nombre es $nombre, tengo $edad años";
        }

        /*
            Se puede especificar el tipo de cada dato en los parámetros
        */

    ?>
    
</body>
</html>