<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <select name = "palabras">
            <?php 
                for ($i=1; $i <=100; $i++)  
                        echo "<option value = '$i'>" . $i ."</option>";     #   Comillas dobles con simples
            ?>
        </select>
    </div>

    <!--
        USAR COMILLAS DOCLES Y SIMPLES

        Has usado comillas dobles y simples porque el HTML necesita comillas para sus atributos (como value, name o class)

        Al usar comillas dobles (") para abrir y cerrar toda la instrucción del echo, PHP automáticamente detecta las
        variables (todo lo que empiece por $) y las sustituye por su valor real sin necesidad de cortarlo en pedazos 
        ni usar puntos. 
        
        En este caso, simplemente usamos comillas simples (') para el atributo value del HTML, evitando así conflictos con
        las comillas dobles exteriores de PHP.
    -->

</body>
</html>