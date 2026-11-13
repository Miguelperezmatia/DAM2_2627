<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body class = "ignis">

    <h1>PLANETA 01: THERMA-X</h1>
    
    <p>Nace en el sol, vive en la leña y muere con el agua</p>
    <p>No tiene sombra, pero devora la oscuridad</p>

    <p class="pista-cruzada">
        La alianza de dos fuegos pequeños y el aliento vital domina en las profundidades.
    </p>


    <?php
     
        include '00_utils.php';
        $solucion_candado = "fuego";

        echo crear_formulario_avance("01_ignotus.php", "VOLVER A IGNOTUS");
        
        if(comprobar_entrada_primera_vez())    
            echo crear_candado("02_ignis.php", false);

        else 
        { 
            $candado = $_POST["candado"];

            if (comprobar_candado($candado, $solucion_candado))
                {
                    echo acierto_enhorabuena();
                    echo crear_candado("02_ignis.php", true, $candado);
                    echo crear_formulario_avance("04_glacies_limps.php", "AVANZAR A GLACIES");
                }
            else
                {
                    echo error_amigable();
                    echo crear_candado("02_ignis.php", false);
                }
        }
    ?>
    
</body>
</html>