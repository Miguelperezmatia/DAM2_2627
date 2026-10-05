<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>
            <?php 
                $numero1 = (float)$_POST["operando1"];
                $numero2 = (float)$_POST["operando2"];
                $operador = $_POST["operador"];
                
                function calcular($num1, $num2, $operador)
                {
                    if($operador === "+")
                        return $num1 + $num2;

                    else if($operador === "-")
                        return $num1 - $num2;

                    else if($operador === "*")
                        return $num1 * $num2;   

                    else if($operador === "/")
                    {
                        if($num2===0.0)
                            throw new Exception("No se puede dividir por 0");
                        else 
                            return $num1 / $num2;
                    }
                        
                    else return "Operador inválido";                                  
                }

                try
                {
                    $resultado = calcular($numero1, $numero2, $operador);

                    if(is_numeric($resultado))
                        echo "El resultado es $resultado";
                    else 
                        echo $resultado;

                } catch(Exception $e)
                {
                    echo "Error: " . $e->getMessage();
                }
            ?>
    
    </h2>
    
</body>
</html>