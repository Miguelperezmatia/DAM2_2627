<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!--
        Un menú desplegable con varios números. Al enviarlo, otra página genera una lista HTML con tantos 
        elementos como el número elegido.
        Cada elemento de la lista debe mostrar su número correspondiente (por ejemplo: "Elemento 1", "Elemento 2"...).
    -->

    <form action="resultado.php" method="post">

        <label>NUMEROS</label>
        
        <select name="numeros">
            <?php for($i=1; $i<=100; $i++)  
                echo "<option value='$i'>$i</option>";
            ?>
        </select>

        <input type="submit" value="DAME">
    </form>

</body>
</html>