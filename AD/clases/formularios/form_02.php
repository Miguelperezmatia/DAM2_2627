<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="res_02.php" method="post">

        <div style="background-color:purple; padding:15px; margin: 10px; border: 3px solid black; text-align:center;">
            OPERADOR 1:<input type="number" name="operando1" required>
        </div>

        <div style="background-color:aqua; padding:15px; margin: 10px; border: 3px solid black; text-align:center;">
            OPERADOR 2:<input type="number" name="operando2" required>
        </div>

    <!--
        <div style="background-color:green; padding:15px; margin: 10px; border: 3px dotted black;">
            OPERANDO:<input type="text" name="operador" value="+" readonly>
        </div>
    -->
        

        <div style="padding:15px; margin: 10px; margin: 10px; border: 3px dashed black; text-align:center;">
            <input type="submit" name="boton" value="+">
        </div>

    </form>
    
</body>
</html>