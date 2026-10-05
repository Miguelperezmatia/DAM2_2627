<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <h2>
        El resultado es 
            <?php 
                $num1 = $_POST["operando1"];
                $num2 = $_POST["operando2"];
                echo $num1 + $num2
            ?>
    
    
    </h2>
    
</body>
</html>