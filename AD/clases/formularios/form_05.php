<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--
        Dado el mes en una pagina anterior que en la siguiente pagina diga si es primavera, verano , invierno
        u otoño
    -->

    <form action="res_05.php" method="post">

        <div style="background-color: red; padding: 10px; border:2px solid black; margin:10px;">
            NOMBRE DEL MES <input type="text" name="mes">
        </div>
        
        <div style="background-color: blue; padding: 10px; border:2px solid black; margin:10px;">
            <input type="submit" name="boton" value="DAME">
        </div>
        
    </form>

</body>
</html>