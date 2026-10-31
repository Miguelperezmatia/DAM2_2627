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
        
        //  Variables que serán globales (debe ponerse global dentro de las funciones donde las queramos usar)
        $equipos = array();
        $premio = "Sigue jugando";


        if(empty($_POST))
            $pot = 20;
        else
            $pot = $_POST["pot"];

        
        //  Función que genera una imagen aleatoria
        function generarImagenAleatorio()
        {
            $aleatorio = rand(1,10);
            global $equipos;
            $equipos[] = $aleatorio;

            return match($aleatorio)
            {
                1 => "<img src='ajax.jpg' width='200' height='250'>",
                2 => "<img src='bayern.jpg' width='200' height='250'>",
                3 => "<img src='milan.jpg' width='200' height='250'>",
                4 => "<img src='psg.jpg' width='200' height='250'>",
                5 => "<img src='mad.png' width='200' height='250'>",
                6 => "<img src='fcb.jpg' width='200' height='250'>",
                7 => "<img src='https://assets.football-logos.cc/logos/spain/700x700/cf-fuenlabrada.2d1d5397.png' width='200' height='250'>",
                8 => "<img src='https://i.pinimg.com/736x/90/7a/33/907a33f9ae512f360d3ec807c8d192ed.jpg' width='200' height='250'>",
                9 => "<img src='https://www.pngfind.com/pngs/m/74-743579_rayo-vallecano-logo-rayo-vallecano-fc-logo-hd.png' width='200' height='250'>",
                10 => "<img src='https://banner2.cleanpng.com/20180502/fyq/kisspng-real-betis-la-liga-real-madrid-c-f-real-sociedad-sevillana-5aea5afe822435.8820858515253081585331.jpg' width='200' height='250'>",
                default => ""
            };
        }

        function comprobarEspanoles($array)
        {
            $con = 0;

            foreach($array as $equipo)
                {
                    if($equipo >= 5)
                        $con++;
                }

            return $con === 4;
        }

        //  Función que modifica pot dependiendo de los elementos que salga (pareja o trio + 20), (pleno + 100)
        function comprobar($elemento1, $elemento2, $elemento3, $elemento4, $pot)
        {
            $elementos = [$elemento1, $elemento2, $elemento3, $elemento4];

            global $premio;
            global $equipos;

            $array = array_count_values($elementos);
            $con = array_values($array);

            $con_pareja = 0;

            foreach($con as $c)
                {
                    if($c === 4)
                        {
                            $pot += 100;
                            $premio = "COMPLETO";
                            return $pot;
                        }

                  else if($c === 3)
                        {
                            $pot += 40;
                            $premio = "TRIO";
                            return $pot;
                        }
                       
                    else if($c === 2)
                            $con_pareja++; 
                }

                
                if($con_pareja === 2)
                    {
                        $pot += 30;
                        $premio = "DOBLE PAREJA";            
                    }  
                else if($con_pareja === 1)
                    {
                        $pot += 20;
                        $premio = "PAREJA";     
                    }
                else if(comprobarEspanoles($equipos))
                    {
                        $pot += 5;
                        $premio="ESPAÑOLES";
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
    <form action="tragaperras_02.php" method="post">

    <!--    DINERO INCIAL    -->
        <div id="div_input">
            <label>POT:</label>
            <input type="text" name="pot" value="<?php echo $pot?>" readonly>

            <p><?php echo $premio?></p>

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
                    {
                        echo "<input type='submit' name='boton' value='JUGAR' disabled>";
                        header("Location: tragaperras_loser.php?ultimo_pot=" . $pot);
                        exit();
                    }

            ?>
        </div>

    </form>

</center>

</body>

</html>