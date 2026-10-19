<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    function devolver_mes(int $mes)
    {
        switch ($mes) {
            case 1:
            case 2:
            case 3:
            case 4:
                return "PRIMAVERA";  
            case 5:
            case 6:
            case 7:
            case 8:
                return "VERANO";  
            
            default:
                return "MES INVÁLIDO";
        }    

    }

    echo devolver_mes(5);
    ?>

</body>
</html>