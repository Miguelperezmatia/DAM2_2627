<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class = "ignotus">

    <h1>PLANETA 00: IGNOTUS</h1>

    <h2>EXPEDICIÓN ESTELAR</h2>

    <h3>Estás más perdido que una nave sin rumbo en el espacio profundo más absoluto...</h3>

    <h4>pero la curiosidad es tu única guía.</h4>
    
    <?php  
        include '00_utils.php';

        echo crear_formulario_avance("02_ignis.php", "AVANZAR A IGNIS");
        echo crear_formulario_avance("03_aqua.php", "AVANZAR A AQUA");
    ?>

</body>
</html>