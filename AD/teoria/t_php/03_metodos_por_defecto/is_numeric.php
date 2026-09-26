<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        /*
            is_numeric($param)

            Devuelve true si el parámetro esde tipo number o de tipo String pero con valor numérico
            Devuelve false en caso contrario
        */


        echo is_numeric("5") . "<br>";      // 1
        echo is_numeric(5) . "<br>";        // 1
        echo is_numeric("hol") . "<br>";    // 0
        echo is_numeric(true) . "<br>";     // 0


    ?>
    
</body>
</html>