<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <p>La hora actual de hoy es 

        <?php
            echo date('H:i:s');  

            echo "<br><br>";   

        function hipotenusa($cateto1 = 3, $cateto2 = 4)
        {
            $hipotenusa = $cateto1 * $cateto1 + $cateto2 * $cateto2 ;
            echo sqrt($hipotenusa);
        }

        
        function hipotenusa2($cateto1, $cateto2, &$hipotenusa)
        {
            $hipotenusa = sqrt($cateto1 * $cateto1 + $cateto2 * $cateto2 );
        }

        echo "<br><br>";

        hipotenusa2(3,4,$h);
        echo $h;

        function calcular($num1, $num2, $operador, &$resultado)
        {
            if($operador === "+")
                $resultado = $num1 + $num2;

            else if($operador === "-")
                $resultado = $num1 - $num2;

            else if($operador === "*")
                $resultado = $num1 * $num2;

            else if($operador === "/")
            {
                if($num2 === 0)
                    $resultado = "No se puede dividir por 0";

                else $resultado = $num1 / $num2;
            }
        }

        $resultado = 0;
        calcular(1,3,"+",$resultado);

        echo $resultado . "<br>";

        $resultado = 0;
        calcular(1,3,"*",$resultado);

        echo $resultado . "<br>";

        $resultado = 0;
        calcular(2,2,"/",$resultado);

        echo $resultado . "<br>";

        $resultado = 0;
        calcular(2,0,"/",$resultado);

        echo $resultado . "<br>";
    ?>

    </p>
</body>
</html>