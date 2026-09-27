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
        (int)

            Castea lo que sea a entero
            Si el usuario escribe letras asume que es un 0 por defecto
    */

        function leerAltura()
        {
            while(true)
            {
                $tam = (int)readline("Introduce un número: ");
                if($tam > 0)
                    return $tam;

                echo "Introduce número válido\n";
            }
        }
    ?>

</body>
</html>