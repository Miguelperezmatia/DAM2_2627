<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body class = "terra">

    <h1>PLANETA 04: GEO-CORE</h1>


    <p>Aquí te enfrentarás al cuarto elemento natural según los filósofos clásicos</p>

    <?php
     
        include '00_utils.php';
        $solucion_candado = "atlas";
        
        echo crear_formulario_avance("03_aqua.php", "VOLVER A AQUA");

        if(comprobar_entrada_primera_vez())    
            echo crear_candado("05_terra.php", false);

        else 
        { 
            $candado = $_POST["candado"];

            if (comprobar_candado($candado, $solucion_candado))
                {
                    echo acierto_enhorabuena();
                    echo crear_candado("05_terra.php", true, $candado);
                    echo crear_formulario_avance("06_vacuum.php", "AVANZAR A VACUUM", "origen", "terra");
                }
            else
                {
                    echo error_amigable();
                    echo crear_candado("05_terra.php", false);
                }
        }
    ?>
    
</body>
</html>