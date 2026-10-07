<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        //  Triángulo
        $altura = 3;
         
        function imprimir($numero, $caracter)
        {
            for ($i=0; $i < $numero; $i++)
            { 
                echo $caracter;
            }
        }

        $nAstn= -1;
        for($i=1; $i <= $altura; $i++)
            {
                imprimir($altura - $i, "_");
                $nAstn = $nAstn + 2;
                imprimir($nAstn,"*");
                echo "<br>";
            }
    ?>

</body>
</html>