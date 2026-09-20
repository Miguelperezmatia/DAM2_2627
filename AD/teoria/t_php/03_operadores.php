<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        //  ARITMÉRICOS

        echo 5 + 2 . "<br>";     //  7
        echo 5 - 2 . "<br>";     //  3
        echo 5 * 2 . "<br>";     //  10
        echo 5 % 2 . "<br>";     //  1
        echo 5 ** 2 . "<br>";    //  25



        //  COMPARACIÓN:    Usar === y !==

        echo (5 == "5") . "<br>";               //  1
        echo (5 === "5") . "<br>";              //  Si es falso no muestra nada

        var_dump(5 == "5"); echo "<br>";        //  bool (true)
        var_dump(5 === "5");                    //  bool (false)
    ?>


    <!--
        El . tiene preferencia sobre el operador == o === , por ello, hay que poner paréntesis

        Se recomienda usar      === a ==
                                !== a !=

                                var_dump() a echo a la hora de comparar valores por las salidas que muestran
    -->

</body>
</html>