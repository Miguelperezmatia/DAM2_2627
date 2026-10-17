/*
    REDUCE 

    Recorre el array acumulando un único valor final.
    
    Recibe una función callback con dos parámetros clave:

        acumulado:              El resultado que se "arrastra" de la vuelta anterior.

        actual:                 El elemento del array que estamos procesando ahora.



    Hay un parámetro que es opcional y que se pone despues de la función callback
    
        Valor inicial:          El punto de partida.

                                Si no se pone valor inicial, en la primera vuelta tendríamos:

                                    acumulado toma el valor del índice 0 del array
                                    actual toma el valor del índice 1 del array

                                Si pones el valor inicial. en la primera vuelta tendríamos:
                                
                                    acumulado toma el valor inicial que se ha escrito
                                    actual toma el valor del índice 0 del array
 

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


/*
    EJERCICIO REDUCE CON FUNCIÓN FLECHA

    Escribe una función contarPorCategoria(lista), que imprima { RPG: 3, Plataformas: 1, Metroidvania: 1 }
*/

const inventario = [
  { id: 1, titulo: "Cyberpunk 2077", categoria: "RPG", precio: 45, stock: 0 },
  { id: 2, titulo: "Super Mario Odyssey", categoria: "Plataformas", precio: 50, stock: 12 },
  { id: 3, titulo: "Zelda: Tears of the Kingdom", categoria: "RPG", precio: 65, stock: 5 },
  { id: 4, titulo: "Elden Ring", categoria: "RPG", precio: 60, stock: 3 },
  { id: 5, titulo: "Hollow Knight", categoria: "Metroidvania", precio: 15, stock: 20 },
];


const contarPorCategoria = (lista) => lista.reduce((acumulado, actual)=> 
    {
        acumulado[actual.categoria] ? acumulado[actual.categoria]++ : acumulado[actual.categoria] = 1;

        return acumulado;
    }, {});

    
console.log(contarPorCategoria(inventario));


