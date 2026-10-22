<!--
    Tabla de números con color

    Genera una tabla HTML de N×N rellena con números aleatorios, coloreando de forma distinta las celdas 
    de la diagonal principal.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="02_resultado.php" method="post">
        <div>
            <label>ALTURA DE LA TABLA</label>
            <input type="number" name="altura" required>
        </div>

        <br><br>

        <div>
            <input type="submit" value="DAME">
        </div>
    </form>
    
</body>
</html>