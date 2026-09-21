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

        function calcularOperacion(float $numeroUno, float $numeroDos, string $operador, &$resultado)
        {

            if($operador === "+")
                $resultado = $numeroUno + $numeroDos;

            else if($operador === "-")
                $resultado = $numeroUno - $numeroDos;

            else if($operador === "*")
                $resultado = $numeroUno * $numeroDos;

            else if($operador === "/")
                {
                    if($numeroDos === 0.0)
                        $resultado = "No se puede dividir por cero";        
                    else
                        $resultado = $numeroUno / $numeroDos;
                }

            else 
                echo "Introduce un operador válido";
        }

        $total = 0;
        calcularOperacion(8,2,"+", $total);
        echo $total;

        $total = 0;
        calcularOperacion(8,2,"-", $total);
        echo $total;

        
        $total = 0;
        calcularOperacion(8,2,"*", $total);
        echo $total;

        
        $total = 0;
        calcularOperacion(8,2,"/", $total);
        echo $total;

        
        $total = 0;
        calcularOperacion(8,0,"/", $total);
        echo $total;
    ?>
</body>
</html>