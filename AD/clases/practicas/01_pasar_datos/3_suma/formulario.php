<!-- 
    Un formulario con varios campos numéricos que, al enviarse por POST, muestra en otra página la suma de todos ellos 
    dentro de un nuevo campo de solo lectura.
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

    NUMERO 1: <input type="number" name="num1" required> <br><br>
    NUMERO 2: <input type="number" name="num2" required> <br><br>
    NUMERO 3: <input type="number" name="num3" required> <br><br>

    <button type="submit">SUMAR</button>
    </form>
    
</body>
</html>