<?php

    /*
        array_count_values ($array)



        Devuelve un nuevo array donde cada elemento es un clave - valor
        
            Las claves son los valores del arreglo original 
            Los valores representan el número exacto de veces que aparecieron



        Sirve para contar cuántas veces se repite cada valor dentro de un arreglo (array)

            Solo puede contar valores que sean de tipo string (texto) o integer (números enteros)
    */

    //  EJEMPLO con array de String

    $frutas = ["pera", "manzana", "platano", "manzana"];
    $frutas2 = array_count_values($frutas);
    var_export($frutas2);                       //  array ( 'pera' => 1, 'manzana' => 2, 'platano' => 1, )
    var_export($frutas);


    //  EJEMPLO con array de Enteros

    $numeros = [1,5,2,1,4,2,5,9];
    $numeros2 = array_count_values($numeros);
    var_export($numeros2);                      //  array ( 1 => 2, 5 => 2, 2 => 2, 4 => 1, 9 => 1, )



?>

