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


        echo "has escrito $valor1, luego $valor2 y por último $valor3";
    ?>
        <form action="resultado_02.php" method="post">

            <input type="hidden" name="input1" value="<?php echo $valor1 ?>">
            <input type="hidden" name="input2" value="<?php echo $valor2 ?>">
            <input type="hidden" name="input3" value="<?php echo $valor3 ?>">

            <div>
                <input type="submit" name ="boton1" value="NO CONCATENO"></input>
            </div>
        </form>
</body>
</html>
