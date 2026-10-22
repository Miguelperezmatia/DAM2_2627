<!-- 
    Formulario con nombre y edad

    Formulario con dos campos (nombre y edad) que envía sus datos por POST a una segunda página, la cual saluda al usuario 
    y calcula la edad que tendra el año que viene.
-->

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        
        <form action="resultado_02.php" method="post">
                <div>
                        <label>NOMBRE</label>
                        <input type="text" name="nombre" required>
                </div>

                <br>

                <div>
                        <label>EDAD</label>
                        <input type="number" name="edad" required>
                </div>
                
                <br>

                <div>
                        <button type="submit">ENVIAR</button>
                </div>
        </form>

</body>
</html>
