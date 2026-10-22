<?php
/*
    Se debe mezclar el required con la seguración de null

    EJEMPLO
*/


        $nombre = $_POST["nombre"] ?? "Anónimo";
        $edad = $_POST["edad"] ?? -1;
        
        $edad_posterior = $edad + 1;

        echo "Hola $nombre, el año que vienes tendrás $edad_posterior años.";


// EJEMPLO 1: Cuando el dato NO existe
// Leemos directamente con el operador ?? para evitar errores
$nombre = $_POST['usuario'] ?? ""; 

if ($nombre !== "") {
    echo $nombre;
}
// No imprime nada, porque tomó el valor "" (vacio).


// EJEMPLO 2: Cuando el dato SÍ existe
$_POST['usuario'] = 'Carlos'; 

$nombre = $_POST['usuario'] ?? "";

if ($nombre !== "") {
    echo $nombre;
}
// Imprime: Carlos
?>