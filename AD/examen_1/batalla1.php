<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $numero_aleatorio = rand(1,3); 
    ?>

    
    <h1 style="text-align: center;">CHOFI SACA</h1> 
    <br>
    <input style="border: solid 2px black; padding: 20px; text-align: center; color: red;" type="number" value="<?php echo $numero_aleatorio;?>" readonly>
  
    <br><br>

       <?php 
            $continuar = "<input type='submit' value='Continuar ->'disabled>";
            $atras = "<input type='submit' value='Volver atrás ->'disabled>";

            echo $continuar;
            echo $atras;
       ?>

    <?php 

        function compararNumeros ($opcion, $numero, $aleatorio) : bool
        {
            return match($opcion)
            {
                "jugador mayor" => $numero > $aleatorio ? true : false,
                "jugador menor" => $numero < $aleatorio ? true : false,
                "iguales"       => $numero == $aleatorio ? true : false,
                default         => "Opción inválida",
            };
        }
    
        (int) $numero = $_POST["numero"];
        $opcion = $_POST["boton"];



        if(compararNumeros($opcion, $numero, $numero_aleatorio) === true)
            {
                echo "<h3 style='color: green; text-align: center;'>¡PERFECTO! CONTINÚAS</h3> <br>";

                $continuar = $continuar.str_replace ("disabled", "", $continuar);
                echo $continuar;

                echo "<form action='chofo.php' method='post'></form>";
            }
        else 
            {
                echo "<h2 style='color: red; text-align: center;'>MUERTO</h2>";

                $atras = $atras.str_replace("disabled", "", $atras);
                echo $atras;

                echo "<form action='chofi.php' method='post'></form>";
            }
    ?> 

</body>
</html>