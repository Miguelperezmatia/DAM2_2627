    <?php 

        /*
            match 

                No admite llaves

        */

        $num1       =   $_POST["numero1"] ?? 0;
        $num2       =   $_POST["numero2"] ?? 0;
        $operador   =   $_POST["operador"] ?? "";
        $resultado = 0;

        $resultado = match($operador)
        {
            "+" => $num1 + $num2,
            "-" => $num1 - $num2,
            "*" => $num1 * $num2,
            "/" => $num2 != 0 ? $num1 / $num2 : "No se puede dividir por 0",
            default => "Operador inválido",
        };

    ?>