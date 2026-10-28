<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $numero_aleatorio = rand(1,10);?>

    <h1 style="color: black; text-align: center;">CHOFO SACA</h1>
    <input style="border: solid 2px black; padding: 20px; text-align: center; color: green;" type="number" value="<?php echo $numero_aleatorio;?>" readonly>

    <?php 

        $numero = $_POST["numero"];
        $opcion1 = $_POST["boton1"];
        $opcion2 = $_POST["boton2"];

        
        
        function compararNumeros ($opcion, $numero, $aleatorio) : bool
        {
            return match($opcion)
            {
                "jugador a diferencia de 1" =>  $numero == $aleatorio + 1 || $numero == $aleatorio -1 ? true : false,
                "jugador a diferencia de 2" =>  $numero == $aleatorio + 2 || $numero == $aleatorio -2 ? true : false,
                "iguales"                   =>  $numero == $aleatorio ? true : false,
                default                     =>  "Opción inválida",
            };
        }
    
        $validar1 = compararNumeros($opcion1, $numero, $numero_aleatorio);
        $validar2 = compararNumeros($opcion2, $numero, $numero_aleatorio);

        if($validar1 || $validar2)
            echo "<h1>¡EDB!</h1><br><p>¡Enhorabuena de la buena!</p>";
        else 
            echo "<h1>OHHHH!!</h1><br><p>¡Has perdido!</p>";

    ?>


    
</body>
</html>