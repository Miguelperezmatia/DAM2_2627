/*
    El encadenamiento de métodos permite ejecutar múltiples operaciones secuenciales sobre un array en una única instrucción.

    Funciona porque cada método de array (como filter o map) devuelve un nuevo array, lo que permite llamar inmediatamente
    a otro método sobre ese resultado.
*/

const numeros = [1, 2, 3, 4, 5, 6];

// Objetivo: Obtener los números mayores que 3 y multiplicarlos por 10

const resultado = numeros
  .filter(num => num > 3)    // Paso 1: Filtra. Devuelve un nuevo array [4, 5, 6]
  .map(num => num * 10);     // Paso 2: Transforma el array anterior. Devuelve [40, 50, 60]

console.log(resultado);