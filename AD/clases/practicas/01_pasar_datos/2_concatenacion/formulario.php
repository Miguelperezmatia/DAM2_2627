<!-- 
    Crea un formulario con tres campos de texto que envíe sus valores por POST a otra página. 
    
    Esa segunda página debe mostrarlos intercalados dentro de una frase y, con un botón aparte, concatenarlos todos seguidos.
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

    NOMBRE: <input type="text" name="nombre"> <br><br>
    CIUDAD: <input type="text" name="ciudad"> <br><br>
    COLOR: <input type="text" name="color">   <br><br>

    <button type="submit">ENVIAR</button>
    </form>
    
</body>
</html>