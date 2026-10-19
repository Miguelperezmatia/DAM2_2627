<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>

        <?php 
                $altura = 5;

                /*
                        indice 0        4 e 1 a
                        indice 1        3 e 3 a
                        indice 2        2 e 5 a

                        indice alt - 1    0 e     
                */

                for ($i=0; $i < $altura; $i++) 
                { 
                        for ($e=0; $e < $altura - $i - 1; $e++)
                                echo "_";
                        
                        for ($a=0; $a < $i + $i + 1; $a++)
                                echo "*";

                        echo "<br>";                          
                }
        ?>
        
        
</body>
</html>