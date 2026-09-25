<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        $numero1 = "10";
        $numero2 = 5.0;

            /*
                Funcion que calcula el número mayor de tres

                Si alguno de los números son iguales devuelve -1
            */

            function numeroMayorTres($num1, $num2, $num3)
            {
                if($num1 === $num2 || $num1 === $num3 || $num2 === $num3)
                    return -1;

                if($num1 > $num2)
                    {
                        if($num1 > $num3)
                            return $num1;

                        return $num3;
                    }

                if($num2 > $num1)
                    {
                        if($num2 > $num3)
                            return $num2;

                        return $num3;
                    }
            }

            
            echo numeroMayorTres(1,2,3) . "<br>";
            echo numeroMayorTres(1,3,2) . "<br>";
            echo numeroMayorTres(3,1,2) . "<br>";
            echo numeroMayorTres(3,2,1) . "<br>";
            echo numeroMayorTres(1,1,2) . "<br>";
            echo numeroMayorTres(1,2,2) . "<br>";
            echo numeroMayorTres(2,1,1) . "<br>";
            echo numeroMayorTres(1,1,1) . "<br>";

            echo "<br><br>";


            /*
                Funcion que calcula el número mayor de tres

                Si alguno de los números son iguales devuelve -1
            */


            function numeroMayorTresAv($num1, $num2, $num3)
            {
                if($num1 === $num2 || $num1 === $num3 || $num2 === $num3)
                    return -1;

                $numeros = [$num1, $num2, $num3];
                $mayor = -1000;

                foreach($numeros as $n)
                {
                    if($n > $mayor)
                        $mayor = $n;
                }

                return $mayor;
            }

            echo numeroMayorTresAv(1,2,3) . "<br>";
            echo numeroMayorTresAv(1,3,2) . "<br>";
            echo numeroMayorTresAv(3,1,2) . "<br>";
            echo numeroMayorTresAv(3,2,1) . "<br>";
            echo numeroMayorTresAv(1,1,2) . "<br>";
            echo numeroMayorTresAv(1,2,2) . "<br>";
            echo numeroMayorTresAv(2,1,1) . "<br>";
            echo numeroMayorTresAv(1,1,1) . "<br>";


            echo "<br><br>";    
    ?>

</body>
</html>