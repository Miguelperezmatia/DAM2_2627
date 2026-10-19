<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>

<!--
        Práctica: Dibujar un Rombo de Asteriscos

        Dado un número $n, construye un rombo (diamante) centrado de asteriscos. 
        La variable $n representa el número de filas de la mitad superior del rombo, incluyendo la fila central más ancha.

        Por ejemplo, si defines $n = 4, el programa debe imprimir 4 filas incrementando su tamaño y luego 
        3 filas decrementando, para que el resultado exacto sea este:

        alt = 4

        ind 0   3 e 1 a
        ind 1   2 e 3 a
        ind 2   1 e 5 a
        ind 3   0 e a
-->

        <h1>PRIMERA SOLUCION</h1><br>

        <?php 
                $altura = 4;
                $ast = -1;

                for ($i=0; $i < $altura; $i++) 
                {
                        for ($e=0; $e < $altura - $i - 1; $e++) 
                              echo "_";

                        for ($a=0; $a < $i + $i + 1; $a++) 
                        { 
                                echo "*";
                        }

                        echo "<br>";
                }


                $nueva_altura = $altura - 1;    
                /*
                        ind 0   1 e 5 a
                        ind 1   2 e 3 a
                        ind 2   3 e 1 a

                */
                for ($i=0; $i < $nueva_altura; $i++) 
                { 
                        for ($e=0; $e < $i + 1; $e++) 
                              echo "_";

                        for ($a=0; $a < ($nueva_altura - $i) * 2 - 1; $a++)  
                                echo "*";

                        echo "<br>";
                }
        ?>

        <br><br>
        <h1>SEGUNDA SOLUCION</h1><br>
        
        <?php 
        $altura = 4;

        // 1. MITAD SUPERIOR (incluye la fila central)
        // $i va de 0 a 3 (0, 1, 2, 3)
        for ($i = 0; $i < $altura; $i++) {
            
            // Espacios "_"
            for ($e = 0; $e < $altura - $i - 1; $e++) {
                echo "_";
            }
            
            // Asteriscos "*"
            for ($a = 0; $a < ($i * 2) + 1; $a++) {
                echo "*";
            }
            
            echo "<br>";
        }

        // 2. MITAD INFERIOR (más sencilla)
        // En lugar de cambiar las matemáticas, contamos hacia atrás:
        // $i va de 2 a 0 (2, 1, 0)
        for ($i = $altura - 2; $i >= 0; $i--) {
            
            // ¡Usamos las MISMAS fórmulas que en la parte superior!
            for ($e = 0; $e < $altura - $i - 1; $e++) {
                echo "_";
            }
            
            for ($a = 0; $a < ($i * 2) + 1; $a++) {
                echo "*";
            }
            
            echo "<br>";
        }
    ?>
        
        
</body>
</html>