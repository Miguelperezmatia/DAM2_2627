<!-- 
    Formulario con nombre y edad

    Formulario con dos campos (nombre y edad) que envía sus datos por POST a una segunda página, la cual saluda al usuario 
    y calcula la edad que tendra el año que viene.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="resultado.php" method="post">
        <input name="nombre" type="text" placeholder="Tu nombre">
        <input name="edad" type="number" placeholder="Tu edad">
        <button type="submit">ENVIAR</button>
    </form>

</body>
</html>