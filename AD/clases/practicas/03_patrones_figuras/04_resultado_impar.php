<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $numero = $_POST["numero"];

        if($numero % 2 !== 0)
            echo "El número $numero es impar";
        else 
            echo "Error, el número no es impar";
    ?>
    
</body>
</html>