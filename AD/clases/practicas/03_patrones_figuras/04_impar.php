<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!--
        Un formulario con un campo numérico que, al enviarse, comprueba si el número es impar. 
        
        Si no lo es, muestra un mensaje de error en vez de continuar.
    -->

    <form action="04_resultado_impar.php" method="post">

        <label>NÚMERO</label>
        <input type="number" name = "numero" required>

        <br><br>

        <input type="submit" value="ENVIAR">

    </form>

    <?php 

    ?>

</body>
</html>