/*
  filter()

    Crea un NUEVO array con todos los elementos que cumplan la condición implementada por la función dada.

    CARACTERÍSTICAS:

          No modifica el array original (inmutabilidad).

          La función callback debe evaluar a un booleano:
              true  ->  El elemento se incluye en el nuevo array.
              false ->  El elemento se descarta.
            
          Si ningún elemento cumple la condición, devuelve un array vacío [].

          Se le puede pasar como función externa si la lógica es compleja (pasarla sin paréntesis)

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