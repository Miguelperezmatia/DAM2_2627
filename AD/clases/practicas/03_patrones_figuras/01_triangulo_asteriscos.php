    <?php 
    
    /*
        Dado un número N, imprime un triángulo de asteriscos centrado de altura N,
        usando dos bucles anidados por fila.
    */
        $altura = leerAltura();
        mostrarTriangulo($altura);

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

        //  En la programación de texto en consola no es necesario imprimir los espacios del lado derecho

        function mostrarTriangulo($altura)
        {
            for($i = 0; $i < $altura; $i++)
            {
                //  Espacios
                for($e = 0; $e < $altura - $i - 1; $e++)
                    {
                        echo " ";
                    }

                //  Asteriscos
                for($a = 0; $a < $i * 2 +1; $a++)
                    {
                        echo "*";
                    }
                echo "\n";
            }
        }

    ?>
