<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tragaperras.css">
</head>

<body>

    <?php

        /*
            Asigna un valor inicial a pot cuando nos metemos por primera vez en la página
            Si no a pot se le asigna el valor según la lógica
        */

        if(empty($_POST))
            $pot = 1000;
        else
            $pot = $_POST["pot"];

        
        //  Función que genera una imagen aleatoria
        function generarImagenAleatorio()
        {
            $aleatorio = rand(1,5);

            return match($aleatorio)
            {
                1 => "<img src='fcb.jpg' width='200' height='250'>",
                2 => "<img src='ajax.jpg' width='200' height='250'>",
                3 => "<img src='bayern.jpg' width='200' height='250'>",
                4 => "<img src='milan.jpg' width='200' height='250'>",
                5 => "<img src='psg.jpg' width='200' height='250'>",
                default => ""

            };
        }

        //  Función que modifica pot dependiendo de los elementos que salga (pareja o trio + 20), (pleno + 100)
        function comprobar($elemento1, $elemento2, $elemento3, $elemento4, $pot)
        {
            $elementos = [$elemento1, $elemento2, $elemento3, $elemento4];

            $array = array_count_values($elementos);
            $con = array_values($array);


            foreach($con as $c)
                {
                    if($c === 4)
                        {
                            $pot += 100;
                            break;
                        }
                       

                    else if($c === 2 || $c === 3)
                        $pot += 20;
                }

            return $pot;
        }

        //  Función que comprueba que el saldo sea mayor o igual a 15
        function comprobarSaldoValido($pot) : bool
        {
            return $pot >= 15;
        }

        //  Se generan las cuatro imágenes aleatorias
        $num1 = generarImagenAleatorio();
        $num2 = generarImagenAleatorio();
        $num3 = generarImagenAleatorio();
        $num4 = generarImagenAleatorio();
        

        if(isset($_POST["boton"]))
            {
                if(comprobarSaldoValido($pot))
                {
                    $pot -= 15;
                    $pot = comprobar($num1, $num2, $num3, $num4, $pot);
                }
            }
        
    ?>


    
<center>
    <form action="tragaperras.php" method="post">

    <!--    DINERO INCIAL    -->
        <div id="div_input">
            <label>POT:</label>
            <input type="text" name="pot" value="<?php echo $pot?>" readonly>
        </div>


    <!--    FIGURAS    -->
        <div id = "imagen">
            <?php echo $num1 ?>
            <?php echo $num2 ?>
            <?php echo $num3 ?>
            <?php echo $num4 ?>
        </div>

    <!--    BOTÓN   Se desactiva el botón de JUGAR para un saldo menor a 15    -->
        <div id="div_boton">
            <?php 
                if(comprobarSaldoValido($pot)) 
                    echo "<input type='submit' name='boton' value='JUGAR'>";
                else 
                    echo "<input type='submit' name='boton' value='JUGAR' disabled>";
            ?>
        </div>

    </form>
</center>

</body>

</html>