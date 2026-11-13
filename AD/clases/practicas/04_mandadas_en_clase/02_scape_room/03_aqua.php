<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class = "aqua">

    <h1>PLANETA 02: HYDRO</h1>

    <p>Es el espejo del cielo cuando se enfurece, la sangre azul del mundo que no tiene forma propia pero lo reclama todo</p>
    <p>Habita en las profundidades</p>
    <?php
     
        include '00_utils.php';
        $solucion_candado = "h2O";
        
        echo crear_formulario_avance("01_ignotus.php", "VOLVER A IGNOTUS");

        if(comprobar_entrada_primera_vez())    
            echo crear_candado("03_aqua.php", false);

        else 
        { 
            $candado = $_POST["candado"];

            if (comprobar_candado($candado, $solucion_candado))
                {
                    echo acierto_enhorabuena();
                    echo crear_candado("03_aqua.php", true, $candado);
                    echo crear_formulario_avance("05_terra.php", "AVANZAR A TERRA");
                }
            else
                {
                    echo error_amigable();
                    echo crear_candado("03_aqua.php", false);
                }
        }
    ?>
    
</body>
</html>