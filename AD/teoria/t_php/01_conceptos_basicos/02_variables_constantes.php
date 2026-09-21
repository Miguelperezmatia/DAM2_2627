<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        //  CONSTANTES

        const LENGUAJE = "PHP";
        define ("NIVEL", "PRINCIPIANTE");

        echo "Lenguaje " . LENGUAJE . " de nivel " . NIVEL;


        //  VARIABLES

        $nombre = "Miguel";     //  String
        $edad = 24;             //  Integer
        $altura = 1.75;         //  Double
        $es_conductor = true;   //  Boolean
        $sin_valor = null;      //  NULL


        //  GETTYPE()

        echo "NOMBRE: " . gettype($nombre) . "<br>" . "EDAD: " . gettype($edad) . "<br>" . "ALTURA: " . gettype($altura) . 
        "<br>" . "CONDUCTOR : " . gettype($es_conductor) . "<br>" . "SIN VALOR : " . gettype($sin_valor) . "<br>" . "<br>";

        //  VAR_DUMP()

        echo "NOMBRE: "; var_dump($nombre); echo "<br>";
        echo "EDAD: "; var_dump($edad); echo "<br>";
        echo "ALTURA: "; var_dump($altura); echo "<br>";
        echo "CONDUCTOR: "; var_dump($es_conductor); echo "<br>";
        echo "CONDUCTOR: "; var_dump($sin_valor); echo "<br>";

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
    -->
    
</body>
</html>