//  LEER DATOS EN LA TERMINAL (NODE.JS CON PROMPT-SYNC)

const prompt = require('prompt-sync')();

const nombre = prompt("¿Cómo te llamas?: ");
console.log("Hola, " + nombre);

/*  
    Reglas clave :

    1)  Siempre devuelve TEXTO (String):

        Debes usar Number() o parseInt() si quieres hacer operaciones matemáticas.


    2)  Intro sin texto devuelve cadena vacía (""):

        Si el usuario simplemente pulsa Enter sin escribir nada, la variable 
        guardará un texto vacío (""), no dará error ni guardará 'null'.
*/