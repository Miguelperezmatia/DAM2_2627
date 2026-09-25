<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <p>La hora actual de hoy es 

        <?php
            echo date('H:i:s');  

            for($i=1 ; $i<=100; $i++)
                echo $i;


            function saludar($nombre, $saludo)
            {
                return $saludo . $nombre;
            }

            echo saludar("Miguel", "Hola qué tal");

            echo "<br><br>";   
        ?>

    </p>
</body>
</html>