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


            Aunque el usuario no vea ese valor en la pantalla (porque la etiqueta es hidden), el navegador sí lo necesita.
            Si no usas echo, el HTML llega al navegador completamente vacío (value=""). 
            
            Como consecuencia, cuando el usuario hace clic en el botón de enviar, el navegador no tiene ningún dato
            guardado en ese input para enviarlo de vuelta a la siguiente página mediante $_POST.
        -->

        <input type="hidden" name="input1" value="<?php echo 1 ?>">

    </form>

</body>
</html>