/*
    Reduce recorre el array acumulando un único valor final — una suma, un máximo, cualquier cosa. 
    
        Recibe      una función con dos parámetros (el acumulado hasta ahora, y el elemento actual) 
                    y un valor inicial:

        El 0 es el punto de partida del acumulado. 
        
            En cada vuelta, reduce llama a la función con el resultado de la vuelta anterior y el siguiente elemento,
*/


const numeros = [23, 23, 23, 23];

//  1)  OBTENER SUMA
const sumaNumeros = numeros.reduce((acumulado, actual) => acumulado + actual, 0);
console.log(sumaNumeros);       //  10


//  2)  OBTENER MULTIPLICACIÓN
const multNumeros = numeros.reduce((acumulado, actual) => acumulado * actual, 1);
console.log(multNumeros);       //  24


//  3)  OBTENER MÁXIMO
function obtenerMaximo(acumulado, actual)
{
    let maximo = numeros[0];

    if(actual > acumulado)
        maximo = actual
    else 
        maximo = acumulado;

    return maximo;
}

const maximo = numeros.reduce((acumulado, actual) =>obtenerMaximo(acumulado, actual), numeros[0]);
console.log(maximo);


//  4)  OBTENER MÁXIMO
function obtenerMaximo2(acumulado, actual)
{
    return acumulado > actual? acumulado:actual;
}

const maximo2 = numeros.reduce(obtenerMaximo2,0);
console.log(maximo2);




//  5)  CONTAR EL NÚMERO DE OCURRENCIAS EN CADA MARCA

const marcas = ["BMW", "mercedes", "mercedes", "audi"];


function obtenerOcurrencias(acumulado, actual)
{
    if(acumulado[actual])
        acumulado[actual]++
    else 
        acumulado[actual] = 1;

    return acumulado;
}

const ocurrencias = marcas.reduce(obtenerOcurrencias, {});


console.log(ocurrencias);   