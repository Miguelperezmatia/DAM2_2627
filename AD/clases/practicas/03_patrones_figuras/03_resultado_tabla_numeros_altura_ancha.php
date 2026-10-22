<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>

        <?php 
            $numero_filas = $_POST["alto"];
            $numero_columnas = $_POST["ancho"];

            for($i=0; $i < $numero_filas; $i++)
                {
                    echo "<tr></tr>";

                    for($j=0; $j < $numero_columnas; $j++)
                        echo "<td> CELDA </td>";
                }
        ?>

    </table>

    
</body>
</html>