<!-- 
    Función que recibe dos operandos y un operador ("+", "-", "*" o "/"), y devuelve el resultado por referencia en un cuarto parámetro 
    en vez de con return.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function calcularOperacion($operando1, $operando2, $operador, &$resultado)
        {
            $resultado = match($operador)
            {
                "+" => $operando1 + $operando2,
                "-" => $operando1 - $operando2,
                "*" => $operando1 * $operando2,
                "/" => $operando2 !== 0 ? $operando1 / $operando2 : "No se puede dividir por 0",
                default => "Operador inválido",
            };
        }

        $total = 0;
        calcularOperacion(8,2,"+", $total);
        echo $total . "<br>";

        $total = 0;
        calcularOperacion(8,2,"-", $total);
        echo $total . "<br>";

        
        $total = 0;
        calcularOperacion(8,2,"*", $total);
        echo $total . "<br>";

        
        $total = 0;
        calcularOperacion(8,2,"/", $total);
        echo $total . "<br>";

        
        $total = 0;
        calcularOperacion(8,0,"/", $total);
        echo $total . "<br>";
    ?>
</body>
</html>