<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        //  sqrt (numero)       Raiz cuadrada

        function hipotenusa($cateto1 = 3, $cateto2 = 4)
        {
            $hipotenusa = $cateto1 * $cateto1 + $cateto2 * $cateto2 ;
            return sqrt($hipotenusa);
        }

        echo hipotenusa(3,4) . "<br>";
        echo hipotenusa(3) . "<br>";
        echo hipotenusa(4) . "<br>";
        echo hipotenusa() . "<br>"
    ?>

</body>
</html>