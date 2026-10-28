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
            array_keys ($array)

            Devuelve un nuevo array indexado con las claves del array original
        */

        $frutas = ["pera" => 2, "manzana" => 3, "platano" => 1, "calabaza" => 21];

    
        $frutasClaves = array_keys($frutas);
        var_export($frutasClaves);              //  array ( 0 => 'pera', 1 => 'manzana', 2 => 'platano', 3 => 'calabaza', )
    ?>

</body>
</html>