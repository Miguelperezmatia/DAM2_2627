<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="res.php" method="post">



        <!-- 
            EXPLICACIÓN DE HIDDEN:

            El tipo "hidden" (oculto) crea un campo en el formulario que el usuario no puede ver ni modificar. 
            
            Se utiliza para enviar datos de forma "invisible" a la siguiente página cuando se hacen formularios en la pagina
            donde se ha recibido un formulario
        -->

        <input type="hidden" name="input1" value="<?php /*echo $valor1;*/ ?>">

    </form>

</body>
</html>