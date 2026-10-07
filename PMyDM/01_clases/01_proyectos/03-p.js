
//  Declarar un Array
const marcas_coches = ["bmw", "mercedes", "audi", "toyota", "AAA"];


//  Acceder a un elemento
console.log(marcas_coches[2]);


//  Recorrer Array
for(let i = 0; i < marcas_coches.length; i++)
    console.log(marcas_coches[i])

//  map:    Función que devuelve un array y aplica una lógica a cada elemento del array 

const numeros = [1, 2, 3, 4];
const dobles = numeros.map(v => v * 2);

const sociedadesLimitada = marcas_coches.map(v => v + " sociedad limitada")
console.log(sociedadesLimitada);

//  filter  Función que devuelve un array y se queda con los elementos que cumplen una condición

const pares = numeros.filter(v => v % 2 === 0);

const marcas_letra_a = marcas_coches.filter(v => v.toLowerCase().includes("a"));
console.log(marcas_letra_a);    //  [ 'audi', 'toyota', 'AAA' ]


//  find devuelve el primer elemento que cumple una condición — solo uno (no devuelve un array), Si ningún elemento cumple la condición devuelve undefined

console.log(marcas_coches.find(v => v.length > 4));         //  mercedes
console.log(marcas_coches.find(v => v.length > 400));       //  undefined

//  reduce


//  Contar el número de ocurrencias en cada marca

function obtenerOcurrencias(acumulado, actual)
{
    if(acumulado[actual])
        acumulado[actual]++
    else 
        acumulado[actual] = 1;

    return acumulado;
}

const ocurrencias = marcas_coches.reduce(obtenerOcurrencias, {});


console.log(ocurrencias);   //  { bmw: 1, mercedes: 1, audi: 1, toyota: 1, AAA: 1 }
