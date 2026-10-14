/*
    REST OPERATOR (...)

        Usa la misma sintaxis que el Spread (...), pero hace exactamente lo contrario:

        AGRUPA múltiples elementos en un solo array u objeto.
*/





function mostrarEquipo(lider, ...miembros) 
{
    console.log("Líder:", lider);
    console.log("Resto del equipo:", miembros);     // 'miembros' es un array
}

mostrarEquipo("Ana", "Carlos", "Elena", "Luis"); 

//  Líder: Ana
//  Resto del equipo: [ 'Carlos', 'Elena', 'Luis' ]

/*  
    --- 1. REST EN PARÁMETROS DE FUNCIÓN ---
    
    Recoge todos los argumentos "sueltos" que le pases a la función y los empaqueta automáticamente en un array.
*/




const ordenador1 = 
{
    n_procesador: 3,
    procesador: "i7",
    grafica: "4070",
    pantalla: "4K",
    raton: "razer",
    conectado: true
};

const {procesador, ...restoDelOrdenador } = ordenador1;

console.log(procesador);                //     "i7"
console.log(restoDelOrdenador);         

/*
    {
    n_procesador: 3,
    grafica: '4070',
    pantalla: '4K',
    raton: 'razer',
    conectado: true
    }
*/

/*
    --- 2. REST EN DESTRUCTURING  CON OBJETOS   ---

    Extrae los datos clave-valor sobrante y los guarda en un nuevo objeto
*/




const colores = ["Rojo", "Verde", "Azul", "Amarillo"];

const [colorPrincipal, ...coloresSecundarios] = colores;

console.log(colorPrincipal);        //    "Rojo"
console.log(coloresSecundarios);    //    ["Verde", "Azul", "Amarillo"]


/*  
    --- 3. REST EN DESTRUCTURING  CON ARRAYS---
    
    Al extraer datos de un array u objeto, puedes guardar "todo lo demás" en una única variable sobrante.
*/



