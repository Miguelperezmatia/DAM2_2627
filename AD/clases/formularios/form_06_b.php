<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: pink;">

    <!--
        Dos desplegables que muestre el numero de palabras de 1 a 100 y el numero de letras de 3 a 6
        Al darle a enviar nos llevará a otra páginay mostrará palabras aleatorias
    -->

    <form action="res_06_b.php" method="post">

    <div style="background-color: aqua; padding: 30px; margin: 10px; text-align: center;">
        <label><b>Número de palabras</b></label>

        <select name = "palabras">
            <?php 
                for ($i=1; $i <=100; $i++)  
                        echo "<option value = '$i'>" . $i ."</option>";
            ?>
        </select>
    </div>

    <div style="background-color: brown; padding: 30px; margin: 10px; text-align: center;">
        <label><b>Número de letras</b></label>

        <select name = "letras">
            <?php 
                for ($i=3; $i <=6; $i++)  
                        echo "<option value = '$i'>" . $i ."</option>";
            ?>
        </select>
    </div>

    <div style="background-color: orange; padding: 30px; margin: 10px; text-align: center;">
        <button name = "boton", type="submit" value = "DAME"></button>
    </div>

    </form>
    
</body>
</html>