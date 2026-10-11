/*
  filter  Función que devuelve un array y se queda con los elementos que cumplen una condición

*/

const numeros = [1,8,23,56,100,93];

const pares = numeros.filter(n => n % 2 === 0);
console.log(pares)      //  [ 8, 56, 100 ]


const menores = numeros.filter(n => n < 0);
console.log(menores);   //  []


//  Ejemplo con array de String
const marcas_coches = ["bmw", "mercedes", "audi", "toyota", "AAA"];


const marcas_letra_a = marcas_coches.filter(v => v.toLocaleLowerCase().includes("a"));
console.log(marcas_letra_a);    //  [ 'audi', 'toyota', 'AAA' ]