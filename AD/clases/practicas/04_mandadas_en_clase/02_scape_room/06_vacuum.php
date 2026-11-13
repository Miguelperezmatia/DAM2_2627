<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body class = "vacuum">

    <?php 
        include '00_utils.php';

        $cadena = "Ignem, glaciem, aquam et terram transiisti. Quo plus a me tollis, eo maior fio. Quid sum?";
        $inverso = invertir($cadena);
    ?>
        <p>Echo inanitatis retrorsum iter facit</p>
        <p class="texto-diagonal"><?php echo $inverso ?></p>

    <?php
        $solucion_candado = "nihil";
        $solucion_candado_2 = "inanis";
        $origen="";

        if(isset($_POST["origen"]))
        {
            $origen = $_POST["origen"];
            echo comprobar_origen($origen);
            $intentos = 2;

            echo mostrar_intentos();
            echo crear_candado_intentos("06_vacuum.php", $intentos, false, $origen);
        }
        
        else if(isset($_POST["candado"]))
        {
            $candado = $_POST["candado"];
            $intentos = (int)$_POST["intentos"];
            $origen = $_POST["origen_oculto"];

            echo mostrar_intentos();
            echo comprobar_origen($origen);

            if (comprobar_candado_doble($candado, $solucion_candado, $solucion_candado_2))
                {
                    echo acierto_enhorabuena();
                    echo crear_candado_intentos("06_vacuum.php", $intentos, false, true, true, $candado);
                    echo crear_formulario_avance("07_gratulationes.php", "PLANETA GRATULATIONES");
                }
            else
                {
                    if($intentos === 0)
                            vuelta_inicio();
                        
                    echo intentos($intentos);
                    echo crear_candado_intentos("06_vacuum.php", $intentos, true, $origen);
                    echo error_malvado();
                }
        }
    ?>
    
</body>
</html>