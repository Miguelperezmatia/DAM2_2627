<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        $valor1 = $_POST["input1"] ?? "";
        $valor2 = $_POST["input2"] ?? "";
        $valor3 = $_POST["input3"] ?? "";
    
        echo "$valor1$valor2$valor3";
    ?>

</body>
</html>