/*
    Reduce recorre el array acumulando un único valor final — una suma, un máximo, cualquier cosa. 
    
        Recibe      una función con dos parámetros (el acumulado hasta ahora, y el elemento actual) 
                    y un valor inicial:

        El 0 al final es el punto de partida del acumulado. 
        
            En cada vuelta, reduce llama a la función con el resultado de la vuelta anterior y el siguiente elemento,
*/

const numeros = [1, 2, 3, 4];

const sumaNumeros = numeros.reduce((acumulado, actual) => acumulado + actual, 0);
console.log(sumaNumeros);       //  10

