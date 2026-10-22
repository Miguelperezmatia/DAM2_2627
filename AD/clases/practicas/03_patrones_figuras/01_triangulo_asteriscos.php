    <?php 
    
    /*
        Dado un número N, imprime un triángulo de asteriscos centrado de altura N,
        usando dos bucles anidados por fila.
    */
        $altura = leerAltura();
        triangulo($altura);

        function leerAltura()
        {
            while(true)
            {
                $tam = (int)readline("Introduce un número: ");
                if($tam > 0)
                    return $tam;

                echo "Introduce número válido\n";
            }
        }

        /*
            $altura = 5

            i 0    4 e     1 a          
            i 1    3 e     3 a
            i 2    2 e     5 a
            i 3    1 e     7 a
            i 4    0 e     9 a
        */

        function triangulo(int $altura)
        {
            for($i=0; $i < $altura; $i++)
                {
                    for($e = 0; $e < $altura - $i - 1; $e++)
                        echo "_";

                    for($a=0; $a < 2 * $i + 1; $a++)   
                        echo "*";

                    echo "\n";
                }
        }

    ?>
