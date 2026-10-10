<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--
        Dos desplegables que muestre el numero de palabras de 1 a 100 y el numero de letras de 3 a 6
        Al darle a enviar nos llevará a otra páginay mostrará palabras aleatorias
    -->

    <form action="res_06.php" method="post">

        <div style="background-color: aqua; padding: 10px; border:2px solid black; margin:10px;">

            <b>NÚMERO DE PALABRAS</b>

            <select name="numeroPalabras">
                <?php 
                    for($i=1; $i<=100; $i++)
                        echo "<option>" . $i . "</option>";
                ?>
            </select>

        </div>

        <br>
        
        <div style="background-color: aqua; padding: 10px; border:2px solid black; margin:10px;">

            <b>NÚMERO DE LETRAS</b>

            <select id="numeroLetras" name="numeroLetras">
                <?php 
                    for($i=3; $i<=6; $i++)
                        echo "<option>" . $i . "</option>";
                ?>
            </select>
        </div>

        <br>

        <div style="background-color: aqua; padding: 10px; border:2px solid black; margin:10px;">

            <input type="submit" value="DAME">
            
        </div>
        
        
    </form>

</body>
</html>