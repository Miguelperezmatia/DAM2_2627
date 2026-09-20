<!-- 
    Un formulario sencillo (por ejemplo, un nombre) que envía el valor por POST y lo muestra de nuevo al navegar a
    una segunda página.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="resultado.php" method="post">

    <input type="text" name="nombre" placeholder="Tu nombre" required> <br><br>
    <button type="submit">ENVIAR</button>

    </form>
    
</body>
</html>