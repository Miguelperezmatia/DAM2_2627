<?php

    function comprobar_entrada_primera_vez()
    {
        return empty($_POST);
    }

    function comprobar_candado(string $candado, string $solucion)
    {
        return trim(strtolower($candado)) === trim(strtolower($solucion));
    }

     function comprobar_candado_doble(string $candado, string $solucion, string $solucion_2)
    {
        return trim(strtolower($candado)) === trim(strtolower($solucion)) || trim(strtolower($candado)) === trim(strtolower($solucion_2));
    }


    function crear_formulario_avance(string $ruta_pagina, string $valor_boton, string $nombre="", string $valor="")
    {
    return 
        
        "<form action='$ruta_pagina' method='post'>

                <input type='submit' value='$valor_boton'>
                <input name='$nombre' type='hidden' value='$valor'>

        </form>";
    }


    function crear_candado(string $ruta_pagina, bool $deshabilitar, string $valor = "")
    {
        if(!$deshabilitar)
        {       
            return 
        
                "<form action='$ruta_pagina' method='post'>

                    <input type='text' name='candado'>
                    <input type='submit' value='ENVIAR RESPUESTA'>    

                </form>";
        }

        return 
                "<form action='$ruta_pagina' method='post'>

                    <input type='text' name='candado' value='$valor' readonly>
                    <input type='submit' value='ENVIAR RESPUESTA' disabled>    

                </form>";
    }

       function crear_candado_intentos(string $ruta_pagina, int $intentos, bool $restar, string $origen, bool $deshabilitar = false, bool $solo_leer = false, string $valor="")
    {
         if($deshabilitar === true && $solo_leer === true)
        {   
            return 
        
                "<form action='$ruta_pagina' method='post'>

                    <input type='text' name='candado' value='$valor' readonly>
                    <input type='hidden' name='origen_oculto' value='$origen'>
                    <input type='hidden' name='intentos' value='$intentos'>
                    <input type='submit' value='ENVIAR RESPUESTA' disabled>    

                </form>";
        }


        if($restar)
        {   
            $intentos --;

            return 
        
                "<form action='$ruta_pagina' method='post'>

                    <input type='text' name='candado'>
                    <input type='hidden' name='origen_oculto' value='$origen'>
                    <input type='hidden' name='intentos' value='$intentos'>
                    <input type='submit' value='ENVIAR RESPUESTA'>    

                </form>";
        }

        return 
                "<form action='$ruta_pagina' method='post'>

                    <input type='text' name='candado'>
                    <input type='hidden' name='origen_oculto' value='$origen'>
                    <input type='hidden' name='intentos' value='$intentos'>
                    <input type='submit' value='ENVIAR RESPUESTA'>    

                </form>";
    }

    function invertir(string $cadena)
    {
        $inverso= "";

        for($i = strlen($cadena) - 1; $i>=0; $i--)
                $inverso .= $cadena[$i];
        
        return $inverso;
    }

    function comprobar_origen(string $origen)
    {
        if($origen === "glacies")
            return crear_formulario_avance("04_glacies_limps.php", "VOLVER A GLACIES");

        return crear_formulario_avance("05_terra.php", "VOLVER A TERRA");
    }

    function vuelta_inicio()
    {
        header("Location:01_ignotus.php");
        exit();
    }

    function acierto_enhorabuena()
    {
        return "<h6 class='acierto'>¡Eres muy bueno!</h6>";
    }

    function error_amigable()
    {
        return "<h6 class='error'>¡Buen intento! Inténtalo de nuevo</h6>";
    }

    function error_malvado()
    {
        return "<h6 class='error'>Error, piensa antes de escribir</h6>";
    }

    function mostrar_intentos()
    {
        return "<p class='numero_intentos'>3 INTENTOS RESTANTES</p>";
    }

    function intentos($intentos)
    {
        if($intentos === 1)
            return "<h6 class=intentos>Te queda $intentos intento</h6>";

        return "<h6 class=intentos>Te quedan $intentos intentos</h6>";
    }
?>
