//  CONTAR EL NÚMERO DE OCURRENCIAS EN CADA MARCA

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

console.log()

/*
    En Reduce:

    El Array (marcas) es una caja llena de elementos: 
        
        Su único trabajo es ir sacando los elementos uno a uno y entregártelos en la mano (eso es la variable actual).


    El Objeto vacío ({}) es una libreta en blanco: 
    
        Es el lugar que tú has elegido para hacer un inventario.


    La función reduce() eres tú haciendo el inventario:
    
        Coge la libreta, saca un elemento de la caja, anota en la libreta la marca y le pone un "1".
        Saca otro elemeto, busca en la libreta si esa marca ya está apuntada, y si está, borra el "1" y pone un "2".
*/


//  CONTAR EL NÚMERO DE OCURRENCIAS EN CADA MARCA

const marcas2 = ["BMW", "mercedes", "mercedes", "audi"];

function obtenerOcurrencias2(acumulado, actual)
{
    acumulado[actual] ? acumulado[actual]++ : acumulado[actual] = 1;

    return acumulado;
}

const ocurrencias2 = marcas2.reduce(obtenerOcurrencias2, {});
console.log(ocurrencias2);   

