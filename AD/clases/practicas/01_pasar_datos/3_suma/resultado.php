<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $resultado = $num1 + $num2 + $num3;
    ?>

    <p>
        La suma de los números es <input type="number" value="<?php echo $resultado?>" readonly>
    </p> 
</body>
</html>