<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php  
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];

        echo "Soy $nombre y tengo $edad"
    ?>
    <br><br>

    NOMBRE DE SOLO LECTURA: <input type="text" value="<?php echo $nombre ?>" readonly>

    <!--

        Los atributos de tipo type en el envio del formulario se guardan en el array $_POST
        $ nombre_variable       Crea una variable

        $_POST                  Variable superglobal sel sistema
                                Es un array asociativo, es decir, utiliza palabras o "claves" para organizar la informacion

        $_POST['nombre']        Entra en el array llamado $_POST, busca la posicion etiquetada como nombre, y devuelveme el valor

        
        Al enviar el formulario, la informacion que el usuario escribe se guarda en el array $_POST, organizada por el atributo
        name de cada <input>

        value           Establece el contenido exacto que se muestra escrito dentro de un <input>

    -->

</body>
</html>