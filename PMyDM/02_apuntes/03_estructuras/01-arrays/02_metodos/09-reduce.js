/*
    REDUCE 

    Recorre el array acumulando un único valor final.
    
    Recibe una función callback con dos parámetros clave:

        acumulado:              El resultado que se "arrastra" de la vuelta anterior.

        actual:                 El elemento del array que estamos procesando ahora.



    Hay un parámetro que es opcional y que se pone despues de la función callback
    
        Valor inicial:          El punto de partida.

                                Si no se pone, en la primera vuelta se toma automáticamente el índice 0 del array como valor inicial, 
                                se lo asigna al acumulado y el actual toma el índice 1.

                                Si pones el valor opcional, en la primera vuelta ese valor se lo queda el acumulado y el actual toma directamente
                                el del elemento del índice 0)
 

    La estructura real es esta:
        numeros.reduce( [FUNCIÓN QUE HACE EL CÁLCULO] , [VALOR INICIAL] )
*/



const numeros = [1, 2, 3, 4];

//  1)  OBTENER SUMA

const sumaNumeros = numeros.reduce((acumulado, actual) => acumulado + actual);      //  No hay valor opcional
console.log(sumaNumeros);       //  10

/*
    V1: acumulado(1) + actual(2) = 3
    V2: acumulado(3) + actual(3) = 6
    V3: acumulado(6) + actual(4) = 10
*/




//  2)  OBTENER MULTIPLICACIÓN

const multNumeros = numeros.reduce((acumulado, actual) => acumulado * actual, 1);   //  Hay valor opcional
console.log(multNumeros);       //  24


/*
    V1: acumulado (1) actual (1)
    V2: acumulado (1) actual (2)
    V3: acumulado (2) actual (3)
    V4: acumulado (6) actual (4)
*/




//  3)  OBTENER MÁXIMO

function obtenerMaximo(acumulado, actual) 
{
    return acumulado > actual ? acumulado : actual;
}

const maximo = numeros.reduce(obtenerMaximo);
console.log(maximo);         


/*  
    Lo que devuelve la función (return) al final de una vuelta, se convierte automáticamente en el acumulado de la siguiente vuelta.


    V1: acumulado (1) actual (2)
    V2: acumulado (2) actual (3)
    V3: acumulado (3) actual (4)
    
    return 4
*/



