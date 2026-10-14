let numeros = [2, 8, 34, -5, 18]

/*
    Crea un nuevo array con los resultados de aplicar una función a cada uno de los elementos del array original. 

    Hay que pasarle una función como parámetro: a la función que se pasa como argumento dentro de otra se le llama callback.

    PARÁMETROS

        1 param:                representa cada valor en el array
        2 param (opcional):     representa cada índice del array 
        3 param (opcional):      el array original sobre el que se llama map.
    

    CARACTERÍSTICAS

        El array sobre el que se ejecuta se mantiene intacto (principio de inmutabilidad).
        El array resultante siempre tendrá exactamente el mismo número de elementos que el original.
        La función que pasas dentro de map() siempre debe usar return (o un retorno implícito)
*/

//  DUPLICANDO VALORES
const numDup = numeros.map(n => n * 2) 


//  MULTIPLICANDO CADA VALOR POR SU RESPECTIVO ÍNDICE
const numInd = numeros.map((n, indice) => n * indice)


//  APLICANDO UN OPERADOR TERNARIO
const numProc = numeros.map(n => n % 2 == 0 ? n * 2 : n)


console.log(numDup)     //  [ 4, 16, 68, -10, 36 ]
console.log(numInd)     //  [ 0, 8, 68, -15, 72 ]
console.log(numProc)    //  [ 4, 16, 68, -5, 36 ]



//  EJEMPLO CON STRING

const marcas_coches = ["bmw", "mercedes", "audi", "toyota", "AAA"];
const sociedadesLimitada = marcas_coches.map(v => v + " sociedad limitada")
console.log(sociedadesLimitada);





/*
    LLAMANDO A UNA FUNCIÓN EXTERNA EN MAP
    
    En lugar de escribir la función flecha directamente dentro de map(), podemos pasarle el nombre de una función ya existente.

    Se le pasa la función a map (SIN PARÉNTESIS) y se encarga automáticamente de pasar cada elemento como argumento a la función

*/

const gradosCelsius = [0, 15, 30];


function convertirAFahrenheit(celsius) 
{
    return (celsius * 9/5) + 32;
}


const gradosFahrenheit = gradosCelsius.map(convertirAFahrenheit);

console.log(gradosFahrenheit);          // [ 32, 59, 86 ]




/*
    USO DE LLAVES {} EN MAP

        Si la lógica dentro de un map() se vuelve lo suficientemente compleja como para necesitar llaves y varias líneas,
        lo ideal y más profesional es extraerla a una función externa, pero lo haremos igualmente con llaves para verlo.
    
        Las llaves son necesarias cuando la lógica requiere más de una línea de código.
        Al abrir llaves, el 'return' pasa a ser obligatorio.
*/

const carritos = [100, 250, 45];

const carritosConEnvio = carritos.map(precio => {

    let costeEnvio = 0;
    
    if (precio < 50) 
        costeEnvio = 5;
    
    return precio + costeEnvio; 
});

console.log(carritosConEnvio);      // [ 100, 250, 50 ]