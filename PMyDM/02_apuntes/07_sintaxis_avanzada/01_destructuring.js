/*
    DESESTRUCTURACIÓN

    Permite extraer valores de arrays o propiedades de objetos y guardarlos en variables independientes utilizando una
    sola línea de código
*/



const ordenador1 = {
    n_procesador: 3,
    procesador: "i7",
    grafica: "4070",
    pantalla: "4K",
    raton: "razer",
    conectado: true
};

const { n_procesador: np, conectado: c, raton: r } = ordenador1;
console.log(np, c, r); // Imprime: 3 true 'razer'

/*
    --- DESTRUCTURING CON OBJETO ---

    La extracción se hace por el NOMBRE EXACTO de la propiedad.

    NO es obligatorio renombrar:
        Estamos usando la sintaxis "propiedadOriginal: nuevoNombreVariable" para crear alias.
*/  




const animales = ["sapo", "rana", "tiburón"];

// 'a1' toma el elemento en el índice 0 ("sapo"). 'a2' toma el índice 1 ("rana").
const [a1, a2] = animales; 
console.log(a1 + a2);           // Imprime: "saporana"

/*  
    --- DESTRUCTURING CON ARRAY ---

    La extracción se hace por POSICIÓN estricta, de izquierda a derecha.

        No hay que renombrar: tú inventas el nombre de la variable sobre la marcha para esa posición específica.
*/




function extraerInfoOrdenador({ n_procesador: np, conectado: c, raton: r }) 
{
    return "procesador: " + np + " conectado: " + c + " raton: " + r;
}

/*  
    --- DESTRUCTURING EN PARÁMETROS DE FUNCIÓN ---

        En lugar de recibir todo el objeto como parámetro desestructuramos el objeto directamente en el momento
        en que la función lo recibe.
*/


console.log(extraerInfoOrdenador(ordenador1));