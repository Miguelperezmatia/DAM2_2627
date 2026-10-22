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

        <label>NÚMERO 1</label>
        <input type="number" name="number1" required>

        <br>
        <br>

        <label>NÚMERO 2</label>
        <input type="number" name="number2" required>

        <br>
        <br>

        <label>NÚMERO 3</label>
        <input type="number" name="number3" required>

        <br>
        <br>

        <input type="submit" value="DAME">

    </form> 

</body>
</html>