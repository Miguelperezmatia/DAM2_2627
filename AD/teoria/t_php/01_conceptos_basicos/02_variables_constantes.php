<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        /*
            VARIABLES GLOBALES

            La palabra reservada global permite acceder a una variable que ha sido definida fuera de una función desde el interior de la misma.
            Se usa cuando no pasas la variable dentro de los paréntesis como un argumento

                En PHP, las variables creadas fuera de una función son invisibles en el interior de una función por defecto. 

                Si intentas modificar $equipos dentro de una función sin declararla como global, PHP creará una variable local temporal que se 
                destruirá al finalizar la función, perdiendo cualquier dato que hayas guardado en ella.
        */


        //  EJEMPLO DE USO DE GLOBAL
        $puntos = 0;

        function sumarPuntos() 
        {
            global $puntos;
            $puntos = $puntos + 10;
        }

        sumarPuntos();

    
        //  CONSTANTES

        const LENGUAJE = "PHP";
        define ("NIVEL", "PRINCIPIANTE");
        define ("PI", 3.1415);

        echo "Lenguaje " . LENGUAJE . " de nivel " . NIVEL;


        //  VARIABLES:  No existe el tipo char
        
        $nombre = "Miguel";     //  String
        $edad = 24;             //  Integer
        $altura = 1.75;         //  Double
        $es_conductor = true;   //  Boolean
        $sin_valor = null;      //  NULL



        //  GETTYPE()

        echo "NOMBRE: " . gettype($nombre) . "<br>" . "EDAD: " . gettype($edad) . "<br>" . "ALTURA: " . gettype($altura) . 
        "<br>" . "CONDUCTOR : " . gettype($es_conductor) . "<br>" . "SIN VALOR : " . gettype($sin_valor) . "<br>" . "<br>";
    ?>

    <!--
        const CONSTANTE                     Sirve para crear una constante
                                            Se evalúa al cargar el script (no puedes usarla dentro de un if) 

        define("CONSTANTE", "VALOR")        Otra forma de crear una constante
                                            Es una función normal, y por tanto más flexible


        $nombre_variable                    Sirve para crear una variable
        gettype(nombre_variable)            Obtiene el tipo de dato de una variable
        var_dump(nombre_variable)           Obtiene el tipo y el valor de una variable

        En un echo no se puede concatenar un var_dump(nombre_variable)

        No existe el dato de tipo char
    -->
    
</body>
</html>