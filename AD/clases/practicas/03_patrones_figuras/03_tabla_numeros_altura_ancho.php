<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!--
        Un formulario donde el usuario indica el número de filas y el número de columnas;
        
        La página siguiente dibuja una tabla HTML de N filas por N columnas.
    -->

    <form action="03_resultado_tabla_numeros_altura_ancha.php" method="post">

        <label>NÚMERO DE FILAS</label>
        <input type="number" name="alto" required>

        <br><br>

        <label>NÚMERO DE COLUMNAS</label>
        <input type="number" name="ancho" required>

        <br><br>        

        <input type="submit" value="DAME">

    </form>

</body>
</html>