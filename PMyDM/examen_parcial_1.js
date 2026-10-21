//  Miguel Pérez Matía

//  Ejercicio 1

const ventas = 
[
    {libro : "Dune", categoria : "Ciencia ficción"},
    {libro : "1984", categoria : "Ciencia ficción"},
    {libro : "Sapiens", categoria : "Ensayo"},
    {libro : "Homo Deus", categoria : "Ensayo"},
    {libro : "El Hobbit", categoria : "Fantasía"}
];


function contarPorCategoria(ventas)
{
    return ventas.reduce(obtener_ventas, {});
}

function obtener_ventas(acumulado, actual)
{
    acumulado[actual.categoria] ? acumulado[actual.categoria]++ : acumulado[actual.categoria] = 1;

    return acumulado;
}

console.log(contarPorCategoria(ventas));    //  Comprobación, no lo pide explícitamente el enunciado


//  Ejercicio 2

const notas = 
[
    [7, 8, 6],
    [5, 4, 6],
    [9, 10, 8]
];

function sumaPorAlumno(notas)
{
    const suma_array = [];

    for (let index = 0; index < notas.length; index++) 
    {
        let suma_alumno = 0;

        for (let j = 0; j < notas[index].length; j++) 
            suma_alumno += notas[index][j];
            
        suma_array.push(suma_alumno);
    }

    return suma_array;
}

console.log(sumaPorAlumno(notas));      //  Comprobación, no lo pide explícitamente el enunciado

//  Ejercicio 3

const numeros = [3, 8, 1, 9, 4]

const invertir = (array) =>
    {
        const inverso = [];

        for (let index = 0; index < array.length; index++) 
                inverso[index] = array[array.length - index - 1];
                
        return inverso;
    }

console.log(invertir(numeros))      //  Comprobación, no lo pide explícitamente el enunciado