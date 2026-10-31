<h1>RELLENAR DINERO</h1>


<?php 
    $dinero_actual = $_GET["ultimo_pot"];

    function depositar_dinero($dinero_actual, $cantidad_deposito)
    {
        if($cantidad_deposito >= 0)
            $dinero_actual += $cantidad_deposito;

        return $dinero_actual;
    }

    echo "Dinero actual antes del depósito: " . $dinero_actual . "<br>";

    $dinero_actual = depositar_dinero($dinero_actual, 10);

    echo "Dinero actual después del depósito: " . $dinero_actual;
?>

    <!--    Formulario para devolver el nuevo saldo a la máquina, se debe hacer así porque tragaperras_02.php espera recibirlo por POST    -->

    <form action="tragaperras_02.php" method="post">

        <!--    El campo hidden almacena el dato pero el usuario no lo ve   -->

        <input type="hidden" name="pot" value="<?php echo $dinero_actual; ?>">
        <input type="submit" value="Volver a la máquina con saldo nuevo">
    </form>