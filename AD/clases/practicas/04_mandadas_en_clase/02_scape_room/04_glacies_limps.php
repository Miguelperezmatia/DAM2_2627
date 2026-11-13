<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class = "glacies">

    <h1>PLANETA 03: CRYO-SYS</h1>


    <!--    Si ya tienes la palabra original tradúcelo al idioma germano para avanzar   -->
    <p> 
        Cada letra de la contraseña original ha avanzado en el abecedario tantas posiciones como el factor numérico que está oculto en otro planeta. 
        Además, bajo la escarcha de este mundo, la respuesta no yace oculta en la tierra, sino en el firmamento.
    </p>

    <p class="pista-mitologica">
        <em>"Bajo el frío eterno de este sector, recuerda el nombre del titán que un día alzó los cielos desde la base del mundo rocoso por castigo divino."</em>
    </p>

    <?php
     
        include '00_utils.php';
        $solucion_candado = "eis";

        echo crear_formulario_avance("02_ignis.php", "VOLVER A IGNIS");

        
        if(comprobar_entrada_primera_vez())   
            echo crear_candado("04_glacies_limps.php", false);

        else 
        { 
            $candado = $_POST["candado"];

            if (comprobar_candado($candado, $solucion_candado))
                {
                    echo acierto_enhorabuena();
                    echo crear_candado("04_glacies_limps.php", true, $candado);
                    echo crear_formulario_avance("06_vacuum.php", "PLANETA VACUUM", "origen", "glacies");
                }
            else
                {
                    echo error_amigable();
                    echo crear_candado("04_glacies_limps.php", false);
                }
        }
    ?>
    
</body>
</html>