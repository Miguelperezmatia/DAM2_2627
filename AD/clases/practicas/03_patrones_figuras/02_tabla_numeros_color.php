<!--
    Tabla de números con color

    Genera una tabla HTML de N×N rellena con números aleatorios, coloreando de forma distinta las celdas 
    de la diagonal principal.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $tam = 5; ?>

    <h1>TABLA DE NÚMEROS ALEATORIOS</h1>

    <table border="1">

        <?php 
            for ($i=0; $i <  $tam ; $i++) 
            { 
                echo "<tr>";

                for ($j=0; $j < $tam; $j++)
                    {
                        
                        if($i === $j)
                            echo "<td style='background-color: blue;'>" . rand(1, 99) . "</td>";
                        else 
                            echo "<td>" . rand(1, 99) . "</td>";
                    }
                
                echo "</tr>"."<br>";
            }
        ?>


    </table>
    
    
</body>
</html>