<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $nombre = $_POST["nombre"] ?? "Anónimo";
        $edad = $_POST["edad"] ?? -1;
        
        $edad_posterior = $edad + 1;

        echo "Hola $nombre, el año que vienes tendrás $edad_posterior años.";
    ?>
    
</body>
</html>
 