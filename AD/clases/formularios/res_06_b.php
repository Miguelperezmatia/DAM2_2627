<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $numero_palabras = $_POST["palabras"];
        $numero_letras = $_POST["letras"];

        function generar_letra()
        {
            $abecedario = "abcdefghijklmnñopqrstuvwxyz";      
            $indice_maximo = mb_strlen($abecedario, 'UTF-8') - 1;
            $indice_aleatorio = rand(0,$indice_maximo);

            return mb_substr($abecedario, $indice_aleatorio, 1, 'UTF-8');
        }

        function generar_palabra(int $numero_letras)
        {
            $palabra = "";

            for ($i=0; $i < $numero_letras; $i++)  
                $palabra .= generar_letra();
            
            return $palabra;
        }

        function generar_palabras(int $numero_palabras, int $numero_letras)
        {
            $array = [];

            for ($i=0; $i < $numero_palabras; $i++)
                $array[$i] = generar_palabra($numero_letras);
            
            return $array;
        }

        $array_palabras = generar_palabras($numero_palabras, $numero_letras);
    ?>

    <ul>
        <?php  
            for ($i=0; $i < count($array_palabras); $i++) 
            {
                $elemento = $array_palabras[$i];
                echo "<li>$elemento</li>";
            }
        ?>
    </ul>

</body>
</html>