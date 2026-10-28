<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--

    Ejercicio 1: 
    
        Combinar formularios, funciones y paso de variables por referencia.
        
        Crea un formulario HTML que pida al usuario tres números y un botón de envío.
        
        Los datos deben enviarse por POST a la misma página (la página debe mostrar el formulario y, debajo, los resultados si se ha enviado).
        
        Crea una función llamada analizarNumeros($n1, $n2, $n3, &$suma, &$media, &$mayor).
        
        La función no debe devolver nada con return.
        
        Debe calcular la suma de los tres, la media aritmética y cuál es el mayor de los tres, y guardar esos valores en las variables pasadas
        por referencia.
        
        Si el formulario ha sido enviado, llama a esta función y muestra un mensaje debajo del formulario que diga, por ejemplo:
            "La suma es 15, la media es 5 y el número mayor es 7".
    -->
            
        <form action="01_simulacro_parcial_1.php" method="post">
            <label>NÚMERO 1</label>
            <input type="number" name="numero1" required>
            <br><br>

            <label>NÚMERO 2</label>
            <input type="number" name="numero2" required>
            <br><br>

            <label>NÚMERO 3</label>
            <input type="number" name="numero3" required>
            <br><br>

            <input type="submit" value="ENVIAR">
        </form>

        <?php 

            function analizarNumeros($n1, $n2, $n3, &$suma, &$media, &$mayor)
                {
                    $suma = $n1 + $n2 + $n3;
                    $media = ($n1 + $n2 + $n3) / 3;
                    $media = round($media, 2);

                    $numeros = [$n1, $n2, $n3];

                    $mayor = $numeros[0];

                    for($i=1; $i < count($numeros); $i++)
                        {
                            if($numeros[$i] > $mayor)
                                $mayor = $numeros[$i];
                        }
                }

            if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]))
            {

                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                $numero3 = $_POST["numero3"];

                $suma = 0;
                $media = 0;
                $mayor = 0;

                analizarNumeros($numero1, $numero2, $numero3, $suma, $media, $mayor);
                echo "La suma es $suma, la media es $media y el número mayor es $mayor";
            }
        ?>
    
        <br><br>

<!--
    Ejercicio 2: 
    
    Crea una página que reciba por POST un número $N (asume que viene de un formulario anterior).
    
    Valida que el número $N sea impar y mayor que 3.

        Si no lo es, muestra el mensaje: "Error: El número debe ser impar y mayor que 3".
        
        Si es válido, genera una tabla HTML de $N filas por $Ncolumnas.
        
        Usando bucles anidados (for), debes colorear las celdas de la tabla de la siguiente manera:
            
            Las celdas que forman el borde exterior de la tabla deben tener un color de fondo azul.
            El resto de celdas (el interior) deben tener un color de fondo gris.
-->

    
    <?php 
    
        if($numero1 > 3 && $numero1 % 2 !== 0)
            {

            echo "<table>";

                for($i = 0; $i < $numero1; $i++)
                    {
                        echo "<tr>";

                            for($j=0; $j <$numero1; $j++)
                                {
                                    if($i === 0 || $i === $numero1 -1 || $j === 0 || $j === $numero1 -1)
                                        echo "<td style='background-color:blue'>CELDA</td>";
                                    else 
                                        echo "<td>CELDA</td>";
                                }

                        echo "</tr>";
                    }
            echo "</table>";
            }
    ?>
<!--
      
        
        Dado un número $n (por ejemplo, $n = 5), escribe el código PHP con bucles for anidados que imprima un 
        "reloj de arena" usando asteriscos y espacios. 
        
        Envuélvelo en una etiqueta <pre> para que respete los saltos de línea y espacios naturales.
            Ejemplo de salida para $n = 5:Plaintext
*********
 *******
  *****
   ***
    *
   ***
  *****
 *******
*********

    $altura = 5

    indice 0    a 9     e 0        
    indice 1    a 7     e 1
    indice 2    a 5     e 2
    indice 3    a 3     e 3
    indice 4    a 1     e 4


    Logica asteriscos :  $altua * 2 - $indice * 2 - 1
-->
        <?php 
            $n = 5;

            for($i=0; $i < $n; $i++)
                {
                    
                    for($e=0; $e < $i; $e++)
                        echo "_";

                    
                    for($a=0; $a < $n * 2 - $i * 2 - 1; $a++)
                        echo "*";

                        
                    echo "<br>";
                }
        ?>



</body>
</html>