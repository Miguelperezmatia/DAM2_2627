<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        /*  Triángulo

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
        */

        $altura = 5;

        for ($i=0; $i < $altura; $i++)
        { 
            for ($e=0; $e < $altura - $i -1; $e++)  
                echo "_";
            
            for ($a=0; $a < $i * 2 + 1; $a++) 
                echo "*";
                
            echo "<br>";
        }
    ?>

</body>
</html>