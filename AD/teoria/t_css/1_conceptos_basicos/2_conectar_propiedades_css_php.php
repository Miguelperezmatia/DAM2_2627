<!--
    Debes añadir atributos en el HTML y luego referenciarlos en tu archivo CSS usando los símbolos correspondientes.


    Universal (*): 
    
        Aplica estilos a absolutamente todos los elementos de la página. 
        No necesita ningún atributo en el HTML.


    Etiquetas:
    
        Modifica todas las etiquetas de un mismo tipo de golpe. 
        Se escribe el nombre directamente                                   (ej. body, img, div).


    Clases (class="nombre"): 
    
        Se usan para dar un mismo estilo a varios elementos. 
        En el archivo CSS se referencian poniendo un punto delante          (.nombre)


    IDs (id="nombre"):
    
        Se usan para identificar a un elemento único en toda la página. 
        En el CSS se referencian usando almohadilla                         (#nombre)
-->



<!--    EJEMPLO DE HTML     -->

<div id="caja-juego">
    <p class="texto-rojo">Saldo actual: <?php echo $pot; ?></p>
    <p class="texto-rojo">¡Sigue jugando!</p>
</div>



<!--    EJEMPLO CSS         -->
    
* {
    font-family: Arial, sans-serif; /* Afecta a toda la página */
}

#caja-juego {
    border: 2px solid black; /* Solo afecta al div único */
}

.texto-rojo {
    color: red; /* Afecta a los dos párrafos con esta clase */
}

#caja_juego input
{
    color:blue;
}