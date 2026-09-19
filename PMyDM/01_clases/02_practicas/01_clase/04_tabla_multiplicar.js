/*
    Reto extra — tablas de multiplicar interactivas

    Escribe una función tablaDe(numero) que imprima esa tabla de multiplicar del 1 al 10, con líneas como "7 x 1 = 7", "7 x 2 = 14"… usando un for por dentro.
    Luego, en el navegador, combínala con prompt() para pedir el número al usuario antes de llamarla: tablaDe(Number(prompt("¿Tabla de qué número?"))).
    
    Como reto encima del reto: haz que también acepte un segundo parámetro opcional con el límite superior de la tabla (por defecto 10).
*/

const prompt = require('prompt-sync')();


const leerNumero = () => parseInt(prompt("¿Tabla de qué número?: "))

const numero = leerNumero()

const tablaDeMultiplicar = (numero, limite=10) => 
    {
        for(let i = 1; i <= limite; i++)
            {
                let resultado = numero * i
                console.log(`${numero} X ${i} = ${resultado}`)
            }
    }



tablaDeMultiplicar(numero)