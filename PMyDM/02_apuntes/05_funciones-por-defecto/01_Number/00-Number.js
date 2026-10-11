const prompt = require('prompt-sync')();


/*
    Intenta convertir toda la cadena en un número numérico válido, conservando los decimales si los hay. 
    
    Si encuentra letras o caracteres no válidos  devuelve NaN
*/

function leerDato(message)
{
    return Number(prompt(message));
}
