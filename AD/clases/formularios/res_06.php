<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
 
        $numeroPalabras = $_POST["numeroPalabras"];
        $numeroLetras = $_POST["numeroLetras"];

        function crearLetra()
        { 
            $random = rand(65,90);
            return chr($random);
        }

        function crearPalabra($numeroLetras)
        {
            $palabra = "";

            for ($i=0; $i < $numeroLetras; $i++) 
            { 
                $letra = crearLetra();
                $palabra = $palabra . $letra;
            }

            return $palabra;
        }

        function crearPalabras($numeroLetras, $numeroPalabras)
        {
            $arrayPalabras = new SplFixedArray($numeroPalabras);

            for ($i=0; $i < $numeroPalabras; $i++) 
                $arrayPalabras[$i] = crearPalabra($numeroLetras);

            return $arrayPalabras;
        }

        $arrayPalabras = crearPalabras($numeroLetras, $numeroPalabras);
    ?>

        <ul>
            <?php 
                for ($i=0; $i < $numeroPalabras; $i++) 
                { 
                    $palabra = "<li>" . $arrayPalabras[$i] . "</li>";
                    echo $palabra;
                }
            ?>
        </ul>

</body>
</html>