<?php
$frutas = ["pera", "manzana"];

    /*
        array_push ($array, $valores...)

            Sirve para añadir un número indeterminado de valores a un array
            Siempre modifica el array original
    */

    $frutas = [];
    

    array_push($frutas, "pera");
    array_push($frutas, "plátano", "naranja");

    var_export($frutas);        //  array ( 0 => 'pera', 1 => 'plátano', 2 => 'naranja', )
?>