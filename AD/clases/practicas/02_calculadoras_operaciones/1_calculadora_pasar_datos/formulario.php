<!-- 
    Un formulario con dos operandos y un operador (+, -, *, /) que envía los datos por POST a una segunda página,
    donde se calcula y se muestra el resultado.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action ="resultado.php" method="post">

        <label>NÚMERO 1</label>
        <input type="number" name="numero1" required>

        <br>
        <br>


        <label>NÚMERO 2</label>
        <input type="number" name="numero2" required>

        <br>
        <br>

        <label>OPERADOR</label>

        <select name="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>  

        <input type="submit" name="button" value="DAME">
    </form>

</body>
</html>