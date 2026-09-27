<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../t_php/01_recepcion_formulario.php" method="post">
        <input type="text" name="nombre" placeholder="Tu nombre">
        <input type="number" name="edad" placeholder="Tu edad">
        <button type="submit">ENVIAR</button>
    </form>

    <!-- 
        <form>      Crea un formulario

                    action          Ruta del archivo donde se envian los datos del formulario

                    method          Metodo que indica como se envian los datos
                                        post    metodo seguro, no aparece en la url
                                        get     metodo inseguro, aparece en la url
        
        <input>     Crea una caja de texto (no tiene etiqueta de cierre)

                    type            Especificamos el contenido que se puede escribir:   text(strings),  number(numeros enteros)
                    name            Es el identificador de dicha caja de texto
                    placeholder     Valor que sale por defecto en la caja de texto para ayudar al usuario
                    value           Establece el contenido exacto que se muestra escrito dentro de un campo

                    readonly        Campo de solo lectura

        <button>    Crea un boton para pulsar
    -->

</body>
</html>