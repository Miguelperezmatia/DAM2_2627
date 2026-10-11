/*
    find devuelve el primer elemento que cumple una condición — solo uno (no devuelve un array), 
    Si ningún elemento cumple la condición devuelve undefined
*/

//  Ejemplo con array de números
const numeros = [23,100,23,4554,334];

const numeroMayor100 = numeros.find(v => v > 100);
console.log(numeroMayor100);    //  4554


//  Ejemplo con array de String
const marcas_coches = ["bmw", "mercedes", "audi", "toyota", "AAA"];

console.log(marcas_coches.find(v => v.length > 4));         //  mercedes
console.log(marcas_coches.find(v => v.length > 400));       //  undefined

console.log(marcas_coches.find(v => v.substring() > 4));    //