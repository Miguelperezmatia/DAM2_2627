    <?php 
        /*
            array_values ($array)

            Devuelve un nuevo array indexado con los valores del array original 
        */

        $frutas = ["pera" => 2, "manzana" => 3, "platano" => 1, "calabaza" => 21];

    
        $frutasValores = array_values($frutas);
        var_export($frutasValores);              //  array ( 0 => 2, 1 => 3, 2 => 1, 3 => 21, )
    ?>