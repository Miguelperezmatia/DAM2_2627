<?php

    /*
        sort($array)

        Si el array es de 
            números, ordena los valores de menor a mayor 
            string,  ordena los valores alfabéticamente 

        Modifica el array original 

        Si el array es de clave - valor, se pierden las claves originales y lom convierte en un array indexado
    */

    
    //  Ejemplo con números

    $numeros = [5, 2, 8, 1, 2];                 //  array ( 0 => 1, 1 => 2, 2 => 2, 3 => 5, 4 => 8, )
    sort($numeros);
    var_export($numeros);


    //  Ejemplo con letras

    $letras = ["zorro", "abeja", "perro"];      //  array ( 0 => 'abeja', 1 => 'perro', 2 => 'zorro', )
    sort($letras);
    var_export($letras);
?>