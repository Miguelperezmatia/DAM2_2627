<?php

    /*
        Un array asociativo es aquel en que cada elemento del array se compone de clave - valor
        Las claves de un array asociativo deben ser ÚNICAS

        Todos los arrays son asociativos:
            Si no se le indica la clave, el array toma como clave el índice por defecto
    */


    //  Array que representa el número de veces que sale cada elemento
    $frutas = ["pera" => 2, "manzana" => 3, "platano" => 1];


    $ocurrencias = [];

    foreach($frutas as $clave => $valor)
        {
            echo "La clave $clave corresponde al valor $valor <br>";    
            array_push($ocurrencias, $valor);   
        }
    
    var_export($ocurrencias);   //  array ( 0 => 2, 1 => 3, 2 => 1,)
    
?>
