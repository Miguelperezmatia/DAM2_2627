<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="procesar.php" method="POST">


    <label for="idiomas">Elige un lenguaje:</label>

    <select name="lenguaje" id="idiomas">

        <option value="php">PHP</option>
        <option value="js">JavaScript</option>
        <option value="py">Python</option>

    </select>

    <!--
        <label>
            
            Es el texto que sale al usuario 
            
                for     Lo conecta con el id del menú desplegable. 

                        Gracias a esto, si un usuario hace clic directamente sobre el texto "Elige un lenguaje:",
                        el menú desplegable recibe el foco automáticamente.

        <select>
            
            Es el contenedor principal que construye la lista desplegable. 
            
                name    Es el identificador que usará PHP para capturar el dato enviado 
                id      Sirve para vincularlo visualmente con el <label>


        <option>
            
            Define cada uno de los elementos elegibles dentro del menú

                value   Contiene el dato real que viaja oculto al servidor, y el texto "PHP" es la cara visible que el 
                        usuario lee en la pantalla.
    -->



</form> 
    
</body>
</html>