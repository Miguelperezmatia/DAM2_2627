let animales = ["Vaca", "Zorro", "Elefante", "Jirafa"]


/*
    nombrearray.slice(indice_principio, indice_final)

        Devuelve un objeto de tipo Array con dimensión [)
            indice_principio se incluye
            indice_final NO se incluye
*/

let nuevo_animales = animales.slice(0,3)
console.log(nuevo_animales)                 //  [ 'Vaca', 'Zorro', 'Elefante' ]



//  COMPORTAMIENTOS ESPECIALES


// Si omites el índice final, extrae desde el inicio indicado hasta el último elemento

console.log(animales.slice(2));     // [ 'Elefante', 'Jirafa' ]



// Si usas números negativos, empieza a contar posiciones desde el final del array hacia atrás

console.log(animales.slice(-2)); // Imprime: [ 'Elefante', 'Jirafa' ]