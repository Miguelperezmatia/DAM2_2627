    <?php 
    
        /*
            $_POST
            
            Array que recpge todos los name enviados desde un formulario
        */

        var_export($_POST)  //  array ( 'miInput1' => 're', 'miBoton1' => 'DAME', )


    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>EN EL INPUT LLEGA EL VALOR  <?php echo $_POST['miInput1']?> </h2>

</body>
</html>