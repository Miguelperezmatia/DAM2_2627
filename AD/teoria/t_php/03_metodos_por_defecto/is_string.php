<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $nombre = "Miguel";
    /*
        is_string (nombre_variable)

            Devuelve true si la variable es de tipo String
            Devuelve false en caso contrario
    */

        if(is_string($nombre))
            echo "Es una cadena";
        
        else
            echo "No es una cadena";
    ?>

</body>
</html>