<?php 

    $nombre = "Miguel";     
    $edad = 24;             
    $altura = 1.75;        
    $es_conductor = true;   
    $sin_valor = null;      

    echo "NOMBRE: "; var_dump($nombre); echo "<br>";
    echo "EDAD: "; var_dump($edad); echo "<br>";
    echo "ALTURA: "; var_dump($altura); echo "<br>";
    echo "CONDUCTOR: "; var_dump($es_conductor); echo "<br>";
    echo "SIN VALOR: "; var_dump($sin_valor); echo "<br>";

    var_export($_POST);    

    /*  
        var_dump()

            Muestra el tipo de dato, el valor y la longitud de la variable en un formato pensado 
            para que el programador lo lea y analice.

        var_export
        
            sirve para estructuras de datos complejas como Listas, Arrays...
    */
?>
