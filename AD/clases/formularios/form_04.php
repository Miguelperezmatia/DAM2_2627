<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:pink;">

    <form action="res_03.php" method="post">

        <div style="background-color:aqua; padding:15px; margin: 10px; border: 3px solid black; text-align:center;">
            OPERADOR 1:<input type="number" name="operando1" required>
        </div>

        <div style="background-color:aqua; padding:15px; margin: 10px; border: 3px solid black;  text-align:center;">
            OPERADOR 2:<input type="number" name="operando2" required>
        </div>    

        <div style="padding:15px; margin: 25px; border: 3px dashed black;  text-align:center; display:block;">

            <input type="submit" name="boton1" value="SUMAR">

            <input type="submit" name="boton2" value="RESTAR">

            <input type="submit" name="boton3" value="MULTIPLICAR">

            <input type="submit" name="boton4" value="DIVIDIR">
        </div>

    </form>
    
</body>
</html>