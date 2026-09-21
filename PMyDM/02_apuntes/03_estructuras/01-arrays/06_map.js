let numeros = [2, 8, 34, -5, 18]

/*
    Crea un nuevo array con los resultados de aplicar una función a cada uno de los elementos del array original. 

    Hay que pasarle una función como parámetro: a la función que se pasa como argumento dentro de otra se le llama callback.

    PARÁMETROS

        1 param:    representa cada valor en el array
        2 param:    representa cada índice del array
    

    CARACTERÍSTICAS

        El array sobre el que se ejecuta se mantiene intacto (principio de inmutabilidad).
        El array resultante siempre tendrá exactamente el mismo número de elementos que el original.
        La función que pasas dentro de map() siempre debe usar return (o un retorno implícito)

*/

//  DUPLICANDO VALORES
numDup = numeros.map(n => n * 2) 


//  MULTIPLICANDO CADA VALOR POR SU RESPECTIVO ÍNDICE
numInd = numeros.map((n, indice) => n * indice)


//  APLICANDO UN OPERADOR TERNARIO
numProc = numeros.map(n => n % 2 == 0 ? n * 2 : n)


console.log(numDup)     //  [ 4, 16, 68, -10, 36 ]
console.log(numInd)     //  [ 0, 8, 68, -15, 72 ]
console.log(numProc)    //  [ 4, 16, 68, -5, 36 ]