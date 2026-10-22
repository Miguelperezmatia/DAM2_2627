<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $num1       =   $_POST["numero1"] ?? 0;
        $num2       =   $_POST["numero2"] ?? 0;
        $operador   =   $_POST["operador"] ?? "";

        $resultado = match($operador)
        {
            "+" => $num1 + $num2,
            "-" => $num1 - $num2,
            "*" => $num1 * $num2,
            "/" => $num2 != 0 ? $num1 / $num2 : "No se puede dividir por 0",
            default => "Operador inválido",
        };

        echo "$num1 $operador $num2 = $resultado";
    ?>

</body>
</html>