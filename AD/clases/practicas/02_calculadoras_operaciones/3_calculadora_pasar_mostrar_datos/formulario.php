<!--
    Igual que la calculadora básica, pero la página de resultado debe mostrar también los dos operandos y 
    el operador recibidos, además del resultado — por ejemplo: “7 + 3 = 10”.
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

        NÚMERO 1 : <input type="number" name="num1" required>
        NÚMERO 2 : <input type="number" name="num2" required>
        OPERADOR : <input type="text" name="operador" required>
        
        <button type="submit">ENVIAR</button>
    </form>

</body>
</html>