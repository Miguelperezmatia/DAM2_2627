/*
    parseInt (string)

        Devuelve un Number
    
        Función que convierte una cadena de texto a un número entero.
        
        Si algun carácter no es un dígito devuelve un number, pero sabemos que específicamente es NaN  
*/
const prompt = require('prompt-sync')();

let edad = prompt("Introduce número: ")

let num = parseInt(edad)
console.log(typeof num)
