<?php
    /*
        GET y POST son los dos métodos HTTP más utilizados para enviar datos desde el navegador del usuario hacia el servidor

        MÉTODOS A TRAVÉS DE UN FORMULARIO:


        Método GET      Datos visibles en la URL 
                        El usuario interactúa pulsando un botón (diferencia con un header (Location)).                    
                        Ejemplo         =>         [tusitio.com/buscar.php?nombre=Juan&edad=25]

        Método POST     Datos ocultos en el cuerpo (body) de la petición HTTP
    */
?>


<!--    ENVÍO DE DATOS CON GET      -->

<form action="recibir.php" method="get">

    <label>Nombre:</label>
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>

</form>


<!--    ENVÍO DE DATOS CON POST      -->

<form action="recibir.php" method="post">

    <label>Contraseña:</label>
    <input type="password" name="password">
    <button type="submit">Enviar</button>

</form>