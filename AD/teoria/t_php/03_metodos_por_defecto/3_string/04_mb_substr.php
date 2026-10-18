<?php  
    /*
        mb_substr($texto, $inicio, $longitud, $codificacion)
        
            Función de PHP diseñada para extraer una subcadena de texto de forma segura, respetando los caracteres 
            especiales que ocupan más de un byte en memoria (como tildes, la letra "ñ" o emojis).
            
            A diferencia de substr(), que corta los datos por bytes


            $texto (obligatorio):

                La cadena de caracteres original de donde vas a extraer la porción.


            $inicio (obligatorio): 
            
                La posición numérica desde donde empezará a extraer. 
                El índice empieza a contar desde 0. 
                Si usas un número negativo, empezará a contar desde el final del texto hacia la izquierda.


            $longitud (opcional): 
            
                La cantidad de caracteres que deseas extraer.
                Si no especificas este valor, extraerá todo el texto restante hasta el final. 
                Si usas un número negativo, omitirá esa cantidad de caracteres al final de la cadena.


            $codificacion (opcional): 
                
                El formato de codificación del texto. 
                En desarrollo web moderno, lo estándar es escribir 'UTF-8' para garantizar la máxima compatibilidad.
    */

    $palabra = "Mañana";

    
    // substr() tradicional falla porque la 'ñ' ocupa 2 bytes
    echo substr($palabra, 0, 3);             // Resultado: "Ma"


    // mb_substr() reconoce la 'ñ' como un único carácter real
    echo mb_substr($palabra, 0, 3, 'UTF-8'); // Resultado: "Mañ"
?>
