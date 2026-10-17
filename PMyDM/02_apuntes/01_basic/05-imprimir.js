/*
    1 METODO:

        Usa comillas invertidas para crear la cadena de texto.
        Permite inyectar variables  directamente dentro de los bloques ${}.
        Todo lo que esté dentro se convierte automáticamente a texto (string).
*/

let vidas = 3;
console.log(`Te quedan ${vidas} vidas en el juego.`); 

/*
    2 METODO:

        Se le envía múltiples piezas de información independientes a la herramienta console.log().
        Node.js recibe estos datos por separado y los imprime respetando su formato original.

        Úsalo cuando trabajes con Objetos o Arrays
*/

const jugador = {nombre: "Mario", nivel: 10};
console.log("Datos del jugador actual:", jugador); 


/*
    3 METODO

        Usa el símbolo de suma matemática para "pegar" fragmentos de texto y variables.

        Se considera una sintaxis anticuada, ya que se recomienda usar los Template Literals (${}).
*/

vidas = 3;
console.log("Te quedan " + vidas + " vidas en el juego."); 
