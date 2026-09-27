<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="formulario.php" method="post">

        NÚMERO 1: <input name="num1" type = "number" required>
        NÚMERO 2: <input name="num2" type = "number" required>
        OPERADOR: <input name="operador" type = "text" required>
        <button type="submit">ENVIAR</button>
    </form>

    <?php 

        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
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
                $resultado = "Introduce un operador válido";

            return $resultado;
        }

         function mostrarResultado(float $numeroUno, float $numeroDos, string $operador, $resultado)
        {
            if(is_string($resultado))
                return "Error: $resultado";
            
            return "$numeroUno $operador $numeroDos = $resultado";
        }

        $resultado = calcularOperacion($numero1, $numero2, $operador);
        $mensaje = mostrarResultado($numero1, $numero2, $operador, $resultado);
    ?>

    <h3>RESULTADO DE LA OPERACIÓN</h3>

    <p> <input value="<?php echo $mensaje ?>" style="width: 300px" readonly> </p>

</body>
</html>