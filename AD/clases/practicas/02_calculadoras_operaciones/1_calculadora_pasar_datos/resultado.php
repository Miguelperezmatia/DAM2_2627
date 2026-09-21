<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operador = $_POST["operador"];

        function calcularOperacion(float $numeroUno, float $numeroDos, string $operador)
        {
            $resultado = 0;

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

            return $resultado;
        }

        $resultado = calcularOperacion($num1, $num2, $operador);
    ?>

    <h3>RESULTADO DE LA OPERACIÓN</h3>

    <p>El resultado es <input value="<?php echo $resultado ?>" readonly> </p>

</body>
</html>