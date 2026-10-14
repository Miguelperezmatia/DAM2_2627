/*
    Hacer un array con los 3 ordenadores y una función que tenga como parámetro el array y devuelva otro array
    de los nombres de procesadores y nombres de gráficos que estén conectados 
*/

const ordenador1 = 
{
    n_procesador : 3,
    procesador : "i7",
    grafica : "4070",
    pantalla : "4K",
    raton : "razer",
    conectado : true
}

const ordenador2 = 
{
    n_procesador : 4,
    procesador : "f1",
    grafica : "40",
    pantalla : "6K",
    raton : "razer",
    conectado : true
}

const ordenador3 = 
{
    n_procesador : 21,
    procesador : "er",
    grafica : "100",
    pantalla : "HD",
    raton : "razer",
    conectado : false
}

const ords = [ordenador1, ordenador2, ordenador3];


//  SOLUCIÓN QUE HICE EN CLASE
function obtenerNombres(ordenadores)
{
    const nuevoArray = [];
    let indiceNuevo = 0;

    for (let index = 0; index < ordenadores.length; index++) 
    {
        const {procesador:p, grafica:g, conectado:c} = ordenadores[index];

        if(c)
            {
                nuevoArray[indiceNuevo] = {procesador : p, grafica : g};
                indiceNuevo++;
            }
    }

    return nuevoArray;
}


console.log("SOLUCION QUE HICE EN CLASE: ");
console.log(obtenerNombres(ords));
console.log()



//  SOLUCIÓN QUE HIZO JOHN ÁNGELO VERA MODIFICADA
function obtenerNombres2(ordenadores)
{
    const resultado = [];

    let index = 0;

        for(const{procesador:p, grafica:g, conectado:c} of ordenadores)
            {
                if(c)
                    {
                    resultado[index] = {procesador : p, grafica : g};
                    index++;
                    }
            }

    return resultado;
}


console.log("SOLUCION DE JOHN MODIFICADA: ");
console.log(obtenerNombres2(ords));
console.log()


//  SOLUCIÓN HECHA POR JUANMANUEL MONTERO

function returnConnectedJuanmaPcs(pcs)
{
    return pcs.reduce((curr, {procesador, grafica, conectado}) =>
    conectado ? [...curr, {procesador, grafica}] : curr, []);
}

console.log("SOLUCIÓN DE JUANMA");

const pcs = [ordenador1, ordenador2, ordenador3];
console.log(returnConnectedJuanmaPcs(pcs));
console.log()





//  SOLUCIÓN INSPIRADA EN JUANMA
function inspiracionJuanmanuelMontero(acumulado, actual)
{
    const {procesador:p, grafica:g, conectado:c} = actual;

    if(c) 
        acumulado.push({procesador : p, grafica : g});   

    return acumulado;
}

console.log("SOLUCION INSPIRADA EN JUANMANUEL MONTERO: ");
const arrayJuanma = ords.reduce(inspiracionJuanmanuelMontero, [])   
console.log(arrayJuanma)
console.log()



//  SOLUCIÓN INSPIRADA EN JUANMA 2

/**
 * @param {string[]} acumulado 
 */

function inspiracionJuanmanuelMontero2(acumulado, actual)
{
    const {procesador:p, grafica:g, conectado:c} = actual;

    if(c) 
        acumulado.push({procesador : p, grafica : g});   

    return acumulado;
}

console.log("SOLUCION INSPIRADA EN JUANMANUEL MONTERO 2: ");
const arrayJuanma2 = ords.reduce(inspiracionJuanmanuelMontero2, []) 
console.log(arrayJuanma2)
console.log()


//  SOLUCIÓN CON FILTER Y MAP

/**
 * 
 * @param {Object[]} ordenadores 
 */
function devolverOrdenadoresConectados(ordenadores)
{
    const ordenadores_conectados = ordenadores.filter(valor => valor.conectado);
    const ordenadores_validos = ordenadores_conectados.map(ordenadoresProcesadorGrafica)

    return ordenadores_validos;
}


/**
 * 
 * @param {Object} ordenador 
 */
function ordenadoresProcesadorGrafica(ordenador)
{
    const {procesador, grafica} = ordenador;
    return {procesador, grafica};
}

console.log("SOLUCIÓN CON FILTER Y MAP");
const ordFiltMap = devolverOrdenadoresConectados(ords)
console.log(ordFiltMap)





