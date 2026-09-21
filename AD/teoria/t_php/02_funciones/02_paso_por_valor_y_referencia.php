<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        /*
            Paso de parámetros por valor:

                La función recibe una copia de la variable y modificarla dentro de dicha función no afecta a la 
                variable original


            Paso de parámetros por referencia:

                La función recibe la dirección de memoria de la variable, por lo que modificarla dentro de dicha
                función afecta a la variable original

                Se debe añadir el símbolo '&' al parámetro


            Por defecto, PHP pasa los parámetros por valor
        */



        //  PASO POR VALOR: comportamiento por defecto

        function duplicar(int $numero)
        {
            $numero = $numero * 2;
        }

        $num = 10;
        duplicar($num);

        echo $num;       //  10, el valor no ha cambiado


        echo "<br>";


        //  PASO POR REFERENCIA

        function duplicarDeVerdad(int &$numero)
        {
            $numero = $numero * 2;
        }

        duplicarDeVerdad($num);

        echo $num;       //  20, el valor ha cambiado
    ?>

</body>
</html>