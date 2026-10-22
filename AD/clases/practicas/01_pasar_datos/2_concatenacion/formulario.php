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
                <div>
                        <label>VALOR 1</label>
                        <input type="text" name="input1" required>
                </div>

                <br>

                <div>
                        <label>VALOR 2</label>
                        <input type="text" name="input2" required>
                </div>

                <br>

                <div>
                        <label>VALOR 3</label>
                        <input type="text" name="input3" required>
                </div>

                <br>


                <br>

                <div>
                        <input type="submit" name ="boton2" value="CONCATENO"></input>
                </div>

        </form>        


</body>
</html>