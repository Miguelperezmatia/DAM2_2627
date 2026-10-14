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

    La extracción se hace por el NOMBRE EXACTO de la propiedad. NO HAY QUE PONER ordenador1.propiedad

    NO es obligatorio renombrar:
        Estamos usando la sintaxis "propiedadOriginal: nuevoNombreVariable" para crear alias.



    Cuando metes variables sueltas dentro de unas llaves {} para fabricar un objeto, JavaScript hace dos cosas automáticamente por ti:

        Usa el nombre de la variable como el nombre de la propiedad (la clave).

        Usa el valor de la variable como el valor de esa propiedad.
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




/*  
    --- VALORES POR DEFECTO Y RENOMBRADO ---

    Si intentas extraer una propiedad que no existe en el objeto, su valor será 'undefined'.
    
    Para evitar errores (muy útil al pedir datos a bases de datos o APIs incompletas), 
    puedes asignar un valor por defecto usando el signo '='.
*/

const usuarioDB = 
{ 
    nombre: "Ana" 
    // Nota: falta la propiedad 'avatar' y 'rol'
};

// 1. Asignar valor por defecto (si 'avatar' no existe, usa "anonimo.png")
const { nombre, avatar = "anonimo.png" } = usuarioDB;
console.log(nombre, avatar); // Imprime: "Ana" "anonimo.png"


// 2. Combinar RENOMBRADO (:) y VALOR POR DEFECTO (=) a la vez
// Busca 'rol', lo renombra a 'r', y como no existe le asigna "invitado"
const { nombre: n, rol: ro = "invitado" } = usuarioDB;
console.log(n, ro); // Imprime: "Ana" "invitado"