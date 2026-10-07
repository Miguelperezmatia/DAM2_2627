/*
    Reduce recorre el array acumulando un único valor final — una suma, un máximo, cualquier cosa. 
    
        Recibe      una función con dos parámetros (el acumulado hasta ahora, y el elemento actual) 
                    y un valor inicial:

        El 0 es el punto de partida del acumulado. 
        
            En cada vuelta, reduce llama a la función con el resultado de la vuelta anterior y el siguiente elemento,
*/


const numeros = [23, 23, 23, 23];

const sumaNumeros = numeros.reduce((acumulado, actual) => acumulado + actual, 0);
console.log(sumaNumeros);       //  10

const multNumeros = numeros.reduce((acumulado, actual) => acumulado * actual, 1);
console.log(multNumeros);       //  24


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



function obtenerMaximo2(acumulado, actual)
{
    return acumulado > actual? acumulado:actual;
}

const maximo2 = numeros.reduce(obtenerMaximo2,0);
console.log(maximo2);
